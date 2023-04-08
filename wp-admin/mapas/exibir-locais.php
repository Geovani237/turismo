<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Locais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Lista de Locais</h1>
                <div class="card">
                    <div class="card-body p-5">
                        <table class="table table-hover table-bordered">
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
                                    <td><?php echo $umaTarefa['foto']; ?></td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>