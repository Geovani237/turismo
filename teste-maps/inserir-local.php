<?php 
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$foto = $_POST['foto'];
$link = $_POST['link'];
$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];

include "conexao.php";

$sql = "insert into t_cadastro(nome,telefone,endereco,foto,link,longitude,latitude) values('$nome', '$telefone','$endereco','$foto','$link','$longitude','$latitude')";

mysqli_query($conexao, $sql);
mysqli_close($conexao);

?>