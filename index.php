<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sessão </title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
</head>

<body>

    <div class="login">
        <div class="container">

            <h1> FAÇA LOGIN </h1>

            <form name="login" method="post" action="controller/verifica-login.php">
                <div class="cx">
                    <input type="text" name="txtlogin" placeholder="Usuário" title="Digite Seu Usuário" required />
                </div>

                <div class="cx">
                    <input type="password" name="txtsenha" placeholder="********" title="Digite Sua Senha" required />
                </div>

                <?php
                if (isset($_GET['msg'])) {
                    echo ("<p class='erro'>" . $_GET['msg'] . "</p>");
                }
                ?>

                <button class="btn" type="submit" title="Entre" name="logar"> Entrar </button>
                <p class="texto"> Ainda não tem uma conta? <a href="#" title="Crie Uma Conta"> Crie Uma. </a> </p>

            </form>
        </div>
    </div>

</body>

</html>