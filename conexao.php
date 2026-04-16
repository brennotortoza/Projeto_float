<?php
// VALORES REAIS DO SEU BANCO NO RAILWAY
$host = 'mysql.railway.internal';
$user = 'root';
$pass = 'uYbOgZGxOSIZVefbqwOsXZIKDasRtjrd';
$db   = 'railway';
$port = '3306';

// Tenta a conexão direta
$ocon = mysqli_connect($host, $user, $pass, $db, $port);

if (!$ocon) {
    header('Content-Type: application/json');
    die(json_encode(["status" => "erro", "mensagem" => mysqli_connect_error()]));
}
?>
