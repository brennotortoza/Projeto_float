<?php
$ocon = mysqli_connect('MYSQLHOST', 'MYSQLUSER', 'MYSQLPASSWORD', 'MYSQL_DATABASE');

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
