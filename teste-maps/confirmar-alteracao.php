<?php 
include_once "conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$foto  = $_POST['foto'];
$link = $_POST['link'];
$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];

$sqlAlterar = "update t_cadastro set nome = '$nome', telefone = '$telefone', endereco = '$endereco',foto = '$foto' ,link = '$link', longitude = '$longitude', latitude = '$latitude' where id = $id";

mysqli_query($conexao, $sqlAlterar);
mysqli_close($conexao);
header("location: exibir-locais.php")
?>