<?php 
include "conexao.php";

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$link = $_POST['link'];
$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];



$pasta = "img/";
$nomeDoArquivo = $_FILES["foto"]["name"];
$extensao = explode(".",$nomeDoArquivo,);
$nomeNovo = $pasta . round(microtime(true)) . "." . end($extensao);

move_uploaded_file($_FILES["foto"]["tmp_name"], $nomeNovo);

$sql = "INSERT into t_cadastro (nome,telefone,endereco,foto,link,longitude,latitude) VALUES('$nome', '$telefone','$endereco','$nomeNovo','$link','$longitude','$latitude')";

mysqli_query($conexao, $sql);
mysqli_close($conexao);

?>