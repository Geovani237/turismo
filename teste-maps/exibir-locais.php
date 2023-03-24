<?php include_once "header.php";?>
<table class="table table-hover">
    <?php
    include "conexao.php";
    $sqlBusca = "select * from t_cadastro";
    $todasAsTarefas = mysqli_query($conexao, $sqlBusca);
    while ($umaTarefa = mysqli_fetch_assoc($todasAsTarefas)) {
    ?>
        <tr class="fw-lighter">
            <td><?php echo $umaTarefa['id']; ?></td>
            <td><?php echo $umaTarefa['nome']; ?></td>
            <td><?php echo $umaTarefa['telefone']; ?></td>
            <td><?php echo $umaTarefa['endereco']; ?></td>
            <td><?php echo $umaTarefa['link']; ?></td>
            <td><?php echo $umaTarefa['longitude']; ?></td>
            <td><?php echo $umaTarefa['latitude']; ?></td>
            <td><span>
                <a class='btn btn-lg' href="alterar-local.php?id=<?php echo $umaTarefa['id'] ?>"> <i class="bi bi-pencil-fill"></i></a>
                <a class='btn btn-lg btn-danger' href="excluir-local.php?id=<?php echo $umaTarefa['id'] ?>"><i class="bi bi-trash3-fill"></i></a>
            </td></span>
        </tr>
    <?php
    }
    mysqli_close($conexao);
    ?>
</table>
<?php  include_once "footer.php"?>