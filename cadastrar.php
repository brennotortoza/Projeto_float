<?php
    header('Content-Type: application/json');

    include 'conexao.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $cadastrar = "INSERT INTO Usuario(email, senha) VALUES('$email','$senha')";
    $verificar = "SELECT * FROM Usuario WHERE email = '$email'";
    $resposta = array();


    if(isset($ocon) && $ocon){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            if(mysqli_num_rows(mysqli_query($ocon, $verificar)) == 0){
                if(mysqli_query($ocon, $cadastrar)){
                    $resposta["status"] = "sucesso";
                    $resposta["mensagem"] = "Cadastro bem sucedido";
                    echo json_encode($resposta);
                }
            }
            else{
                $resposta["status"] = "erro";
                $resposta["mensagem"] = "Email já cadastrado";
                echo json_encode($resposta);
            }
        }
        else{
            $resposta["status"] = "erro";
            $resposta["mensagem"] = "Email inválido";
            echo json_encode($resposta);
        }
    }
        else {
        $resposta["status"] = "erro";
        $resposta["mensagem"] = "Falha na variavel de conexao";
    }
?>
