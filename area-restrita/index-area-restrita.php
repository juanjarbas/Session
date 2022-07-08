<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Sessão </title>
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
    </head>
    <body>
        <?php include_once('../controller/controle.php'); ?>

        <div class="login">
        <div class="container">
        <h1> Olá, Usuário(a)! </h1>

        <p class="texto-user">
            Seja bem-vindo(a) a Área Restrita aqui você <br>
            tem total liberdade, então fique a vontade.

            <br>
        </p>


        <a href="../controller/destroi-sessao.php"><button class="btn" type="submit" name="logar"> Sair </button> </a>
        </div>
        </div>




    </body>
</html>