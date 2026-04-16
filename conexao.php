<?php
// Pega os dados reais do painel do Railway
$host = getenv('MYSQLHOST');
$user = getenv('MYSQLUSER');
$pass = getenv('MYSQLPASSWORD');
$db   = getenv('MYSQLDATABASE'); // Verifique se no Railway está MYSQLDATABASE ou MYSQL_DATABASE
$port = getenv('MYSQLPORT');

// Faz a conexão usando as variáveis (SEM aspas nos nomes das variáveis)
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
