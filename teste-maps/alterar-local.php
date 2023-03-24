<?php include_once "header.php" ?>
<h2>
    Alterar informações
</h2>
<?php 
    $id = $_GET['id'];
    $nome = "";
    $telefone = "";
    $endereco = "";
    $foto = "";
    $link = "";
    $longitude = "";
    $latitude = "";

    include_once "conexao.php";

    $sqlBusca = "SELECT * from t_cadastro WHERE id = $id";

    $todasTarefas = mysqli_query($conexao, $sqlBusca);

    while($umaTarefa = mysqli_fetch_assoc($todasTarefas)){
        $nome = $umaTarefa['nome'];
        $telefone = $umaTarefa['telefone'];
        $endereco = $umaTarefa['endereco'];
        $foto = $umaTarefa['foto'];
        $link = $umaTarefa['link'];
        $longitude = $umaTarefa['longitude'];
        $latitude = $umaTarefa['latitude'];
    }
    mysqli_close($conexao);
?>
<form action="confirmar-alteracao.php" method="post" >
    <input type="hidden" name="id" value="<?php echo $id;?>"><br>
    <input name="nome" value="<?php echo $nome;?>"><br>
    <input name="telefone" value="<?php echo $telefone;?>"><br>
    <input name="endereco" value="<?php echo $endereco;?>"><br>
    <input type="file" name="foto" id="foto" value="<?php echo $foto; ?>"><br>
    <input name="link" value="<?php echo $link;?>"><br>
    <input name="longitude" value="<?php echo $longitude;?>"><br>
    <input name="latitude" value="<?php echo $latitude;?>"><br>
    <button type="submit">Salvar</button><br>
</form>

<?php include_once "footer.php" ?>