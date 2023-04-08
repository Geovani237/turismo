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

while ($umaTarefa = mysqli_fetch_assoc($todasTarefas)) {
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
<form action="confirmar-alteracao.php" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-body p-5">
            
            <div class="input-group mb-3">
                <input type="hidden" name="id" id="nome" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1" value="<?php echo $id; ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nome do Local</span>
                </div>
                <input type="text" name="nome" class="form-control" aria-label="Local" aria-describedby="basic-addon1" value="<?php echo $nome; ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Telefone</span>
                </div>
                <input type="text" name="telefone" class="form-control" aria-label="Local" aria-describedby="basic-addon1" value="<?php echo $telefone; ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Endereço</span>
                </div>
                <input type="text" name="endereco" class="form-control" aria-label="Local" aria-describedby="basic-addon1" value="<?php echo $endereco; ?>">
            </div>
        

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Foto</span>
                </div>
                <input type="file"name="foto" id="foto" class="form-control" aria-label="Local" aria-describedby="basic-addon1" value="<?php echo $foto; ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Link</span>
                </div>
                <input type="text" name="link" class="form-control" aria-label="Local" aria-describedby="basic-addon1" value="<?php echo $link; ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Longitude</span>
                </div>
                <input type="text" name="longitude" class="form-control" aria-label="Local" aria-describedby="basic-addon1" value="<?php echo $longitude; ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Latitude</span>
                </div>
                <input type="text" name="latitude" class="form-control" aria-label="Local" aria-describedby="basic-addon1" value="<?php echo $latitude; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>

        </div>
    </div>
</form>

<?php include_once "footer.php" ?>

