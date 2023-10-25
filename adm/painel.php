<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['id']) && !isset($_SESSION['nome'])) {
    unset($_SESSION['id']);
    unset($_SESSION['nome']);
    header('Location: ../Login/index.php');
}
$logado = $_SESSION['nome'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>JurisPro - Traduzindo o jurídico</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="painel.css">
</head>

<body>
    <div class="logotitulo">
        <img id="logo" src="../Menu/img/logo.png">
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 0px;">

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="justify-content: end; background-color: rgb(23, 23, 61);">
            <div class="navbar-nav" style="padding: 2px; font-family: Arial, Helvetica, sans-serif;">
                <a href="painel.php" class="btn btn-outline-light" style="border: none; font-weight: bold;">Home</a>
                <a href="../Fórum/forum.php" class="btn btn-outline-light" style="border: none; font-weight: bold;">Fórum</a>
                <a href="../Glossário/" class="btn btn-outline-light" style="border: none; font-weight: bold;">Glossário</a>
                <a class="btn btn-outline-light" href="../Login/logout.php" style="border: none; font-weight: bold;">Sair</a>
            </div>
        </div>
    </nav>

    <h1>Bem vindo ao painel, <?php echo "$logado" ?></h1>

</body>

</html>