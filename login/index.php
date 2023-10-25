<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>

<body>


    <div class="logoLogin">
        <img id="logo" src="img/logo.png">
    </div>

    <a href="../Menu/menu.php" style="font-weight: bold;" class="btn btn-outline-warning">Voltar</a>


    <div class="panel-body">
        <form action="login.php" method="POST" class="form">
            <div class="Group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="Group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="senha" required>
            </div>

            <div class="Group">
                <button type="submit" class="btn btn-warning" style="font-weight: bold;" name="submit">Login</button>
            </div>
            <?php
            if (isset($_GET['msg'])) {
                $mensagem_erro = $_GET['msg'] == 'erro_login' ? 'Login Inválido' : 'Usuário ou senha inválidos';
            ?>
                <div role="alert" style="color:red"><?php echo $mensagem_erro; ?></div>
            <?php
            }
            ?>

        </form>
    </div>

</body>

</html>