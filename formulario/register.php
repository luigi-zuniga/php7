<?php
    $email = 'luigi@diva.cl';
    $password = 'pass123';
    $_mensaje = 'ErrorSession';

    if($_POST['email'] == $email && $_POST['password'] == $password)
    {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $_password;
        header('location:menu.php');
    }else{
        session_start();
        $_SESSION['msg'] = $_mensaje;
        header('location:index.php');
    }
?>