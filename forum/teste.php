<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cooking Forum</title>
    <link rel="stylesheet" href="forumADM.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div class="logotitulo">
        <img id="logo" src="img/logo.png">
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 0px;">

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="justify-content: end; background-color: rgb(23, 23, 61);">
            <div class="navbar-nav" style="padding: 2px; font-family: Arial, Helvetica, sans-serif;">
                <a href="../painel.php" class="btn btn-outline-light" style="border: none; font-weight: bold;">Home</a>
                <a href="forumADM.php" class="btn btn-outline-light" style="border: none; font-weight: bold;">Fórum</a>
                <a href="../Glossário/" class="btn btn-outline-light" style="border: none; font-weight: bold;">Glossário</a>
                <a class="btn btn-outline-light" href="/web/Login/logout.php" style="border: none; font-weight: bold;">Sair</a>
            </div>
        </div>
    </nav>

    <br>
    <br>
    <br>

    <h1>Escreva a sua dúvida!</h1>

    <form action="salvarPergunta.php" method="POST">
        <div class="form-group">
            <label for="thread_pseudonimo">Pseudônimo: (OPCIONAL)</label>
            <input type="text" id="thread_title" class="form-input" name="pseudonimo">
        </div>

        <div class="form-group">
            <label for="thread_title">Título:</label>
            <input type="text" id="thread_title" class="form-input" name="titulo">
        </div>


        <div class="form-group">
            <label for="thread_content">Conteúdo:</label>
            <textarea id="thread_content" class="form-input" name="texto" rows="8" cols="140"></textarea>
        </div>

        <div class="btn-group">
            <button class="btn btn-ghost">Cancelar</button>
            <button class="btn btn-blue" type="submit" name="Publish">Publicar </button>
        </div>

    </form>

</body>

</html>