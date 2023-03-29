<?php 
include_once "conexao.php";

$id = $_POST['id'];
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

if($nomeDoArquivo != ""){
    $sqlAlterar = "update t_cadastro set nome = '$nome', telefone = '$telefone', endereco = '$endereco',foto = '../wp-admin/mapas/$nomeNovo' ,link = '$link', longitude = '$longitude', latitude = '$latitude' where id = $id";
}else{
    $sqlAlterar = "update t_cadastro set nome = '$nome', telefone = '$telefone', endereco = '$endereco',link = '$link', longitude = '$longitude', latitude = '$latitude' where id = $id";
}

mysqli_query($conexao, $sqlAlterar);
mysqli_close($conexao);
header("location: exibir-locais.php")
?>