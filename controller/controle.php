<?php
    session_start();
    if( ($_SESSION['login-session'] != 'usuario@user.com') ||
        ($_SESSION['senha-session'] != '123') ){
            header('Location: ../index.php?msg= E-mail ou senha incorretos.');
        }

?>