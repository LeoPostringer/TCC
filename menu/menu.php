<html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Cooking Forum</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="menu.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

  <div class="logotitulo">
    <img id="logo" src="img/logo.png">
  </div>

  <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 0px; margin-right: -10px;">

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="justify-content: end; background-color: rgb(23, 23, 61); margin-right: 10px;">
      <div class="navbar-nav" style="padding: 2px; font-family: Arial, Helvetica, sans-serif; ">
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

  <main>
    <section>
      <!-- <div class="posts1"> -->

      <style>

      </style>

      <div class="card text-center" style="box-shadow: 0px 0px 0px black;
                transition-property: transform;
                transition-duration: 2s;
                color: white;
                border-radius: 20px;
                padding: 30px;
                background-color: rgba(0, 0, 0, 0.61);  
                width: 1000px;
                height: 400px;
                margin-top: -100px;
                text-align: center;
                align-items: center;">
        <h2>Direitos Fundamentais</h2>
        <br>
        <p>O artigo 5º da Constituição Federal do Brasil é abrangente e fundamental, abordando direitos e
          garantias essenciais para os cidadãos. Isso inclui direitos como vida, igualdade, liberdade,
          propriedade e segurança, estabelecendo a igualdade perante a lei sem distinções. O Estado e a
          sociedade têm a responsabilidade de proteger e promover esses direitos para garantir o pleno
          exercício da cidadania. A preservação dos direitos fundamentais é crucial para a dignidade
          humana,
          limitação do poder e desenvolvimento da personalidade, contribuindo para uma sociedade justa e
          solidária.</p>
      </div>

      <div class="card text-center" style="box-shadow: 0px 0px 0px black;
                transition-property: transform;
                transition-duration: 2s;
                color: white;
                border-radius: 20px;
                padding: 30px;
                background-color: rgba(0, 0, 0, 0.61);  
                width: 1000px;
                height: 400px;
                margin-top: -100px;
                text-align: center;
                align-items: center;">
        <h2>Legislação Brasileira</h2>
        <br>
        <p>No Brasil, o poder é dividido em Legislativo, Executivo e Judiciário, com cada um exercendo
          funções
          específicas. O Legislativo elabora leis e fiscaliza o Executivo. O Executivo é liderado pelo
          Presidente e executa as leis. O Judiciário, com órgãos como STF e STJ, julga conflitos. Essa
          divisão
          busca descentralizar o poder para um Estado democrático. O Dia Mundial da Lei enfatiza o
          conhecimento da legislação. Mudanças sociais podem levar à alteração das leis através de Emendas
          Constitucionais (PECs). No Brasil, existem PECs importantes, como a de reeleição presidencial e
          o
          teto de gastos. As leis promovem organização social, ética e justiça, sendo fundamentais para
          uma
          sociedade democrática.</p>
      </div>
    </section>

    <div class="tudoposts2">
      <div class="posts2">
        <h3 style="font-size: 20px;">Digite aqui sua dúvida e veja o que está previsto na Constituição Federal</h3>

        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" name="busca" style="width: 500px;" type="search" placeholder="Escreva aqui sua duvida" aria-label="Search">
        </form>

      </div>
    </div>
  </main>

  <footer style="background-color: rgb(23, 23, 61); height: 100px;" class="text-center text-lg-start bg-white text-muted">

    <section class="" style="background-color: rgb(23, 23, 61); height: 100px;">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" style="color: white; font-size: 14px; width:250px;">

            <h6 class="text-uppercase fw-bold mb-4">
              Links
            </h6>
            <p>
              <a href="https://www.planalto.gov.br/ccivil_03/constituicao/constituicao.htm" class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Constituição Federal 1998</a>
            </p>
            <p>
              <a href="http://www.ifsul.edu.br/" class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Instituto Federal Sul-rio-grandense</a>
            </p>
            <p>
              <a href="https://www.gov.br/mds/pt-br/acesso-a-informacao/lgpd" class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Lei Geral de Proteção de Dados Pessoais(LGPD)</a>
            </p>
          </div>

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" style="color: white; font-size: 14px; width:250px;">
            <h6 class="text-uppercase fw-bold mb-4">Contato</h6>
            <p>
              <a class="fas fa-envelope me-3 text-secondary"></a>
              leoRosa@gmail.com
            </p>
            <p><a class="fas fa-phone me-3 text-secondary"></a> (51) 99912-5003</p>
            <p>
              <a class="fas fa-envelope me-3 text-secondary"></a>
              davilorenco@gmail.com
            </p>
            <p><i class="fas fa-print me-3 text-secondary"></i> (51) 98372-3832</p>
          </div>
        </div>
      </div>
    </section>

    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
      © 2023 Copyright:
      <a class="text-reset fw-bold">JurisPro Company</a>
    </div>

  </footer>

</body>

</html>