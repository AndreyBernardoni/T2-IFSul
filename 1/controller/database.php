<?php

    // Separa as informações em variaveis
    $name = str_replace(';', '-', $_POST['name']);
    $email = str_replace(';', '-', $_POST['email']);
    $phone = str_replace(';', '-', $_POST['phone']);

    // Concatena as informações em uma string
    $text = $name . ";" . $phone . ";" . $email . PHP_EOL;
    
    // Abre o arquivo para escrita
    $file = fopen("contacts.txt", "a");
    fwrite($file, $text);

    // Fecha o arquivo
    fclose($file);

    // Redireciona para a home
    header("Location: ../index.php");
?>