<!--
Atualização: 15/10/2023 às 08:20
Editor: João Pedro
Obs.: Foi realizado a inclusão de uma seleção
    para a base de dados que vai ser consultada.   
-->
<?php include ('controller/autenticar-sistema.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Integração</title>
    <link href="src/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="src/css-interno/style-login.css" rel="stylesheet">
</head>
<body class="bg-dark">
    <form action="" method="POST">
        <img src="src/img/Logo_mi.png" alt="Logo Ministério de Integração" width="90%">
        <div class="w-100">
        <label for="username-system" class="form-label text-uppercase mt-3 text-light">Usuário:</label>
            <input type="text" class="form-control" name="username-system" id="username-system" autocomplete="off">
        </div>
        <div class="w-100">
            <label for="password-system" class="form-label text-uppercase mt-2 text-light">Senha:</label>
            <input type="password" class="form-control" name="password-system" id="password-system" autocomplete="off">
        </div>
        <div class="w-100 mt-3 ">
            <select class="form-select fw-bolder text-uppercase" aria-label="Base de Dados">
                <option selected>Base de Dados</option>
                <option value="recife">Canaã - Recife</option>
                <option value="cabo">Canaã - Cabo</option>
            </select>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-warning w-100 text-uppercase fw-bolder mt-4">Entrar</button>
        </div>
        <p class="mt-3 text-light">
            Os dados de acesso são intransferiveis
        </p>
    </form>
</body>
</html>