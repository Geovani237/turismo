<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local novo</title>
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

                        <form method="POST" action="inserir-local.php" enctype="multipart/form-data">
                            <div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Nome do Local</span>
                                    </div>
                                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Local" aria-label="Usuário" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Telefone</span>
                                    </div>
                                    <input type="text" name="telefone" id="telefone" class="form-control" placeholder="(00)00000-0000" aria-label="Usuário" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Endereço</span>
                                    </div>
                                    <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Endereço" aria-label="Usuário" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Foto</span>
                                    </div>
                                    <input type="file" name="foto" id="foto" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Link</span>
                                    </div>
                                    <input type="text" name="link" id="link" class="form-control" placeholder="Link Oficial do local" aria-label="Usuário" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Longitude</span>
                                    </div>
                                    <input type="text" name="longitude" id="longitude" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Latitude</span>
                                    </div>
                                    <input type="text" name="latitude" id="latitude" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
                                </div>

                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>