<?php
// Pega os valores reais que estão guardados no painel do Railway
$host = getenv('MYSQLHOST');
$user = getenv('MYSQLUSER');
$pass = getenv('MYSQLPASSWORD');
$db   = getenv('MYSQL_DATABASE') ?: "railway"; // Verifique se no Railway está sem o underline (_)
$port = getenv('MYSQLPORT');

// FAZ A CONEXÃO USANDO AS VARIÁVEIS (SEM ASPAS NOS NOMES)
$ocon = mysqli_connect($host, $user, $pass, $db, $port);

if (!$ocon) {
    header('Content-Type: application/json');
    $resposta["status"] = "erro";
    $resposta["mensagem"] = "Erro de conexão com o banco de dados";
    exit;
}
?>
