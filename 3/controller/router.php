<?php

    session_start();

    if(isset($_POST['login']) && $_POST['user'] != '' && $_POST['password'] != '') {

        $_SESSION['username'] = $_POST['user'];
        $_SESSION['password'] = $_POST['password'];
        header('Location: auth.php');

    }else if (isset($_POST['register'])) {

        header('Location: ../view/register.php');

    }else if (isset($_POST['login']) && $_POST['user'] == '' && $_POST['password'] == '') {

        header('Location: ../index.php?error=1');
        
    }
