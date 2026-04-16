<?php
$ocon = mysqli_connect('sql100.infinityfree.com', 'if0_41354013', 'WaBtW3zGedx', 'if0_41354013_usuario');

$respota = array();

if(!$ocon){
    $resposta["status"] = "erro";
    $resposta["mensagem"] = "Falha na conexão com o banco de dados";
    echo json_encode($resposta);
    exit;
}
else{
    echo "Conexão bem sucedida";
}
?>