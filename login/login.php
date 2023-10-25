<?php

      session_start();
  // print_r($_REQUEST);    

    if (isset($_POST['email']) || isset($_POST['senha']) ) {

           include_once('config.php');
           
           $email = $mysqli->real_escape_string($_POST['email']); 
           $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM administrador WHERE email = '$email' AND senha = '$senha'";
           $sql_query = $mysqli->query($sql_code) or die("Falha na conexão do código SQL: " .$mysqli->error);

            $qtd = $sql_query->num_rows;

            if ($qtd > 0) {
                $usuario = $sql_query->fetch_assoc();

                if (!isset($_SESSION)) {
                  session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                // print_r("Entrou");

                header('Location: ../Adm/painel.php');

            } else {
              unset($_SESSION['id']);
              unset($_SESSION['nome']);
              header('Location: index.php?msg=erro_login');
           }

 
   }

?>