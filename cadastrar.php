<?php
header('Content-Type: application/json');
include 'conexao.php';

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

$resposta = array();

if (isset($ocon) && $ocon) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        $verificar = "SELECT * FROM Usuario WHERE email = '$email'";
        $query_verificar = mysqli_query($ocon, $verificar);

        if (mysqli_num_rows($query_verificar) == 0) {
            $cadastrar = "INSERT INTO Usuario(email, senha) VALUES('$email','$senha')";
            
            if (mysqli_query($ocon, $cadastrar)) {
                $resposta["status"] = "sucesso";
                $resposta["mensagem"] = "Cadastro bem sucedido";
            } else {
                $resposta["status"] = "erro";
                $resposta["mensagem"] = "Erro ao inserir dados";
            }
        } else {
            $resposta["status"] = "erro";
            $resposta["mensagem"] = "Email já cadastrado";
        }
    } else {
        $resposta["status"] = "erro";
        $resposta["mensagem"] = "Email inválido";
    }
} else {
    $resposta["status"] = "erro";
    $resposta["mensagem"] = "Falha de conexão";
}

echo json_encode($resposta);
?>
