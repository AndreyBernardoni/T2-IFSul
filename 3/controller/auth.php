<?php

    session_start();

    $users = array();

    $file = fopen("arquivodeusuarios.txt", "a+");

    while (!feof($file)) {
        $user = fgets($file);
        $users[] = $user;
    }

    fclose($file);

    foreach ($users as $user) {
        $user = explode(";", $user);
        if ($_SESSION['username'] == $user[0] && $_SESSION['password'] == $user[1]) {
            $_SESSION[$_SESSION['username']] = true;
            break;
        }
    }

    if ($_SESSION[$_SESSION['username']] == true) {
        header('Location: ../view/home.php');
    } else if ($_SESSION[$_SESSION['username']] == false){
        header('Location: ../view/register.php?error=1');
        $_SESSION['username'] = 'erro';
    }


?>