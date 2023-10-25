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
        <a href="../Fórum/forum.html" class="btn btn-outline-light" style="border: none; font-weight: bold;">Fórum</a>
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

  <div class="container">
    <div class="col-full push-top">
      <div class="col-large push-top">

        <?php
        if (!isset($_SESSION)) {
          session_start();
        }

        if (isset($_SESSION['id']) && isset($_SESSION['nome'])) {
        ?>
          <a href="" class="btn-green btn-small">Responder</a>
        <?php
        }
        ?>

        <h1>Estou com dúvida no artigo 7</h1>

        <p>
          Perguntado por <a class="link-unstyled">Leo postringer</a>
          <span style="float:right; margin-top: 2px;" class="hide-mobile text-faded text-small">1 resposta</span>
        </p>
        <div class="post-list">

          <div class="post">

            <div class="post-content">
              <div>
                <p>
                  Olá, estou com uma duvida sobre o artigo 7 da Constituição Federal,
                  especificamente no inciso II - seguro-desemprego, em caso de desemprego involuntário;
                  O que seria exatamente esse desemprego involuntário?
                </p>
                <div class="post-content">

                  <blockquote class="small">
                    <div class="author">

                      <div class="quote">
                        <p>Olá, Leo Postringer!
                          O termo "desemprego involuntário" se refere a uma situação em que um indivíduo perde seu
                          emprego sem que tenha sido sua escolha.
                          Em outras palavras, é quando alguém é demitido ou dispensado de seu trabalho de forma não
                          voluntária. Isso pode ocorrer por várias razões.
                          O artigo 7 da Constituição Federal do Brasil estabelece os direitos dos trabalhadores, e o
                          inciso II menciona o seguro-desemprego como um benefício a ser concedido em caso de
                          desemprego involuntário.
                          O seguro-desemprego é um apoio financeiro temporário fornecido pelo governo para ajudar os
                          trabalhadores que perderam seus empregos involuntariamente a enfrentar as dificuldades
                          financeiras enquanto procuram por uma nova oportunidade de emprego. Para ter direito ao
                          seguro-desemprego, o trabalhador normalmente deve cumprir certos requisitos, como tempo de
                          serviço mínimo e outros critérios estabelecidos pelas leis trabalhistas.
                        </p>
                      </div>

                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</html>