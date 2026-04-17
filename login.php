<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
    include 'conexao.php';

    header('Content-Type: application/json');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $resposta = array();

    $verificar = "SELECT * FROM Usuario WHERE email = '$email' AND senha = '$senha'";

    if(isset($ocon) && $ocon){
        if(mysqli_num_rows(mysqli_query($ocon, $verificar)) > 0){
            $resposta["status"] = "sucesso";
            $resposta["mensagem"] = "Login bem sucedido";
            echo json_encode($resposta);
        }
        else{
            $resposta["status"] = "erro";
            $resposta["mensagem"] = "Email ou senha estão errado, tente novamente";
            echo json_encode($resposta);
        }
    }
?>
