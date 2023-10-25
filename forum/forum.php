<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cooking Forum</title>
    <link rel="stylesheet" href="Fórum.css">
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
                <a href="../Menu/menu.html" class="btn btn-outline-light" style="border: none; font-weight: bold;">Home</a>
                <a href="../Fórum/forum.php" class="btn btn-outline-light" style="border: none; font-weight: bold;">Fórum</a>
                <a href="../Glossário/" class="btn btn-outline-light" style="border: none; font-weight: bold;">Glossário</a>
                <?php
                if (!isset($_SESSION)) {
                    session_start();
                }

                if (isset($_SESSION['id']) && isset($_SESSION['nome'])) {
                ?>
                    <a class="btn btn-outline-light" href="../Login/logout.php" style="border: none; font-weight: bold;">Sair</a>
                <?php
                } else {
                ?>
                    <a class="btn btn-outline-light" href="../Login/index.php" style="border: none; font-weight: bold;">Login</a>
                <?php
                }
                ?>

            </div>
        </div>
    </nav>

    <div class="container" style="padding: 0px; align-items: center;">
        <?php
        if (!isset($_SESSION)) {
            session_start();
        }

        if (!isset($_SESSION['id']) && !isset($_SESSION['nome'])) {
        ?>
            <a href="nova-pergunta.html" class="btn-green btn-small" style="margin-top: 20px; text-align: center;">Nova pergunta</a>
        <?php
        }
        ?>
        <br>
        <br>
        <br>
    </div>

    <div class="col-full">
        <div class="category-item">
            <div class="forum-list">

                <div class="threads-count">

                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="col-full">

        <div class="thread-list">

            <h2 class="list-title">Fórum de dúvidas</h2>

            <div class="thread">
                <div>
                    <p>
                        <a href="subtopico.php">Estou com dúvida no artigo 7</a>
                    </p>
                    <p class="text-faded text-xsmall">
                        Perguntado por Leo postringer</a>
                    </p>
                </div>

                <div class="activity">
                    <p class="replies-count">
                        1 resposta
                    </p>



                    <div>

                    </div>
                </div>
            </div>

            <div class="thread">
                <div>
                    <p>
                        <a href="subtopico.html">DÚVIDA NA CONSTITUIÇÃO FEDERAL</a>
                    </p>
                    <p class="text-faded text-xsmall">Perguntado por DaviLorenç</a>
                </div>

                <div class="activity">
                    <p class="replies-count">
                        0 respostas
                    </p>



                </div>
            </div>

            <div class="thread">
                <div>
                    <p>
                        <a href="subtopico.html">Multifilling</a>
                    </p>
                    <p class="text-faded text-xsmall">By <a href="profile.html">Ray-Nathan James</a>, 6 days ago</p>
                </div>

                <div class="activity">
                    <p class="replies-count">
                        0 respostas
                    </p>


                </div>
            </div>

            <div class="thread">
                <div>
                    <p>
                        <a href="subtopico.html">Egg replacer for bread dough?</a>
                    </p>
                    <p class="text-faded text-xsmall">By <a href="profile.html">Theodor Jackson</a>, 2 weeks ago</p>
                </div>

                <div class="activity">
                    <p class="replies-count">
                        1 resposta
                    </p>


                </div>
            </div>

            <div class="thread">
                <div>
                    <p>
                        <a href="subtopico.html">Which is your favorite carbohydrate? 🤓</a>
                    </p>
                    <p class="text-faded text-xsmall">By <a href="profile.html">Ray-Nathan James</a>, 1 month ago</p>
                </div>

                <div class="activity">
                    <p class="replies-count">
                        0 respostas
                    </p>


                </div>
            </div>
            <div class="thread">
                <div>
                    <p>
                        <a href="subtopico.html">Estou com dúvida no artigo 7</a>
                    </p>
                    <p class="text-faded text-xsmall">
                        Perguntado por Leo postringer</a>
                    </p>
                </div>

                <div class="activity">
                    <p class="replies-count">
                        1 resposta
                    </p>



                    <div>

                    </div>
                </div>
            </div>
            <div class="thread">
                <div>
                    <p>
                        <a href="subtopico.html">Estou com dúvida no artigo 7</a>
                    </p>
                    <p class="text-faded text-xsmall">
                        Perguntado por Leo postringer</a>
                    </p>
                </div>

                <div class="activity">
                    <p class="replies-count">
                        1 resposta
                    </p>



                    <div>

                    </div>
                </div>
            </div>
            <div class="thread">
                <div>
                    <p>
                        <a href="subtopico.html">Estou com dúvida no artigo 7</a>
                    </p>
                    <p class="text-faded text-xsmall">
                        Perguntado por Leo postringer</a>
                    </p>
                </div>

                <div class="activity">
                    <p class="replies-count">
                        1 resposta
                    </p>



                    <div>

                    </div>
                </div>
            </div>

            <div class="thread">
                <div>
                    <p>
                        <a href="subtopico.html">Estou com dúvida no artigo 7</a>
                    </p>
                    <p class="text-faded text-xsmall">
                        Perguntado por Leo postringer</a>
                    </p>
                </div>

                <div class="activity">
                    <p class="replies-count">
                        1 resposta
                    </p>



                    <div>

                    </div>
                </div>
            </div>

            <div class="thread">
                <div>
                    <p>
                        <a href="subtopico.html">Estou com dúvida no artigo 7</a>
                    </p>
                    <p class="text-faded text-xsmall">
                        Perguntado por Leo postringer</a>
                    </p>
                </div>

                <div class="activity">
                    <p class="replies-count">
                        1 resposta
                    </p>



                    <div>

                    </div>
                </div>
            </div>

            <div class="thread">
                <div>
                    <p>
                        <a href="subtopico.html">Estou com dúvida no artigo 7</a>
                    </p>
                    <p class="text-faded text-xsmall">
                        Perguntado por Leo postringer</a>
                    </p>
                </div>

                <div class="activity">
                    <p class="replies-count">
                        1 resposta
                    </p>



                    <div>

                    </div>
                </div>
            </div>



        </div>


        <div class="pagination">
            <button class="btn-circle" disabled><i class="fa fa-angle-left"></i></button>
            1 of 3
            <button class="btn-circle"><i class="fa fa-angle-right"></i></button>
        </div>
    </div>

    </div>

    <div class="forum-stats desktop-only">

    </div>

</body>

</html>