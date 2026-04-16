<?php
// Pega os valores reais que estão guardados no painel do Railway
$host = getenv('MYSQLHOST');
$user = getenv('MYSQLUSER');
$pass = getenv('MYSQLPASSWORD');
$db   = getenv('MYSQLDATABASE'); // Verifique se no Railway está sem o underline (_)
$port = getenv('MYSQLPORT');

// FAZ A CONEXÃO USANDO AS VARIÁVEIS (SEM ASPAS NOS NOMES)
$ocon = mysqli_connect($host, $user, $pass, $db, $port);

if (!$ocon) {
    header('Content-Type: application/json');
    echo json_encode([
        "status" => "erro",
        "mensagem" => "Falha na conexão: " . mysqli_connect_error()
    ]);
    exit;
}
?>
