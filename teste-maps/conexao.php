<?php 
$server = '127.0.0.1';
$db = 'db_turismo';
$user = 'root';
$password = '';

try{
    $conexao = mysqli_connect($server,$user,$password,$db);
}catch(Exception $e){
    echo "Erro na conexão : $e";
    exit();
}

?>