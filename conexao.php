<?php
// Pega os dados reais do painel do Railway
$host = "mysql.railway.internal"
$user = "root"
$pass = "uYbOgZGxOSIZVefbqwOsXZIKDasRtjrd";
$db   = "railway"
$port = "3306";

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
