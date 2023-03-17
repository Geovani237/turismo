<?php 
$pasta = "img/";

$nomeDoArquivo = $_FILES["foto"]["name"];
$extensao = explode(".",$nomeDoArquivo,);
$nomeNovo = round(microtime(true)) . "." . end($extensao);

move_uploaded_file($_FILES["foto"]["tmp_name"], $pasta . $nomeNovo);
?>