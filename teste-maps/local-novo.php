<?php include_once "header.php" ?>

<body>
    <form method="POST" action="inserir-local.php">
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
    <?php include_once "footer.php" ?>