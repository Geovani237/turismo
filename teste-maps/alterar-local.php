<h3>
    Alterar informações
</h3>

<?php 
    $id = $_GET['id'];
    $nome = "";
    $telefone = "";
    $endereco = "";
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
        $link = $umaTarefa['link'];
        $longitude = $umaTarefa['longitude'];
        $latitude = $umaTarefa['latitude'];
    }
    mysqli_close($conexao);
?>
<form action="confirmar-alteracao.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <input name="nome" value="<?php echo $nome;?>">
    <input name="telefone" value="<?php echo $telefone;?>">
    <input name="endereco" value="<?php echo $endereco;?>">
    <input name="link" value="<?php echo $link;?>">
    <input name="longitude" value="<?php echo $longitude;?>">
    <input name="latitude" value="<?php echo $latitude;?>">
    <button type="submit">Salvar</button>
</form>