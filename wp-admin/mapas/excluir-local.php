<?php 
include_once "conexao.php";

$id = $_GET ['id'];

$sqlExcluir = "delete from t_cadastro where id = $id ";

mysqli_query($conexao, $sqlExcluir);
mysqli_close($conexao);
header("location: exibir-locais.php")
?>