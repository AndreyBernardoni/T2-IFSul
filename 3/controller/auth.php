<?php

    session_start();

    $users = array();

    $file = fopen("arquivodeusuarios.txt", "r");

    while (!feof($file)) {
        $user = fgets($file);
        $users[] = $user;
    }

    fclose($file);

    foreach ($users as $user) {
        $user = explode(";", $user);
        if ($_SESSION['username'] == $user[0] && $_SESSION['password'] == $user[1]) {
            $_SESSION['authed'] = true;
            break;
        }
    }

    if ($_SESSION['authed'] == true) {
        header('Location: ../view/home.php');
    } else if ($_SESSION['authed'] == false){
        header('Location: ../index.php?error=2');
        $_SESSION['username'] = 'erro';
    }


?>