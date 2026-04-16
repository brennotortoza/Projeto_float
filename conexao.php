<?php
// Tenta pegar de $_ENV, se falhar tenta getenv
$host = $_ENV['DB_HOST'] ?? getenv('DB_HOST');
$user = $_ENV['DB_USER'] ?? getenv('DB_USER');
$pass = $_ENV['DB_PASSWORD'] ?? getenv('DB_PASSWORD');
$db   = $_ENV['DB_NAME'] ?? getenv('DB_NAME');
$port = $_ENV['MYSQLPORT'] ?? '3306';

// Força a exibição de erros para o Log te mostrar a verdade
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $ocon = mysqli_connect($host, $user, $pass, $db, $port);
} catch (Exception $e) {
    header('Content-Type: application/json');
    echo json_encode(["status" => "erro", "mensagem" => "Erro real: " . $e->getMessage()]);
    exit;
}
?>
