<?php
    $login = $_POST['txtlogin'];
    $senha = $_POST['txtsenha'];

    //login = adm e senha = 123
    if( ($login == 'adm') && ($senha == '123') ){
        header("Location: ../area-restrita/index-area-restrita.php");
        session_start();
        $_SESSION['login-session'] = $login;
        $_SESSION['senha-session'] = $senha;
    }
    else{
        header("Location: ../index.php?msg=E-mail ou senha incorretos.");
    }
?>