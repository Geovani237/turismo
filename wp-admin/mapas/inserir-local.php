<?php 
include "conexao.php";

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$link = $_POST['link'];
$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];


$nomeDoArquivo = $_FILES["foto"]["name"];

$pasta = "img/";
$extensao = explode(".", $nomeDoArquivo);
$nomeNovo = $pasta . round(microtime(true)) . "." . end($extensao);

move_uploaded_file($_FILES["foto"]["tmp_name"],$nomeNovo);



$sql = "INSERT INTO t_cadastro(nome,telefone,endereco,foto,link,longitude,latitude) VALUES('$nome', '$telefone','$endereco','../wp-admin/mapas/$nomeNovo','$link','$longitude','$latitude')";

mysqli_query($conexao, $sql);
mysqli_close($conexao);

header('location: ../../teste-maps/index.php');
?>
