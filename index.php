<?php
header("Content-Type: application/json; charset=UTF-8");

echo json_encode([
    "projeto" => "API TCC",
    "status" => "online",
    "autor" => "Seu Nome"
]);