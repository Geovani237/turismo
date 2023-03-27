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
                                <label>
                                    Nome do Local:
                                    <input type="text" name="nome" id="nome">
                                </label><br>

                                <label>
                                    Telefone:
                                    <input type="text" name="telefone" id="telefone">
                                </label><br>

                                <label>
                                    Endereço:
                                    <input type="text" name="endereco" id="endereco">
                                </label><br>

                                <label>
                                    Foto:
                                    <input type="file" name="foto" id="foto">
                                </label><br>

                                <label>
                                    Link:
                                    <input type="text" name="link" id="link">
                                </label><br>

                                <label>
                                    Longitude:
                                    <input type="text" name="longitude" id="longitude">
                                </label><br>

                                <label>
                                    Latitude:
                                    <input type="text" name="latitude" id="latitude">
                                </label><br>

                                <button type="submit">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>