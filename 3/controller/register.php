<?php

    // Boolean para verificar se o Id já existe
    $userExists = false;

    // Criação de um array vazio
    $users = array();

    // Separa as informações em variaveis
    $username = str_replace(';', '-', $_POST['user']);
    $password = str_replace(';', '-', $_POST['password']);

    // Cria uma string com as informações
    $text = $username . ";" . $password . ";" . PHP_EOL;

    // Abre o arquivo para escrita
    $file = fopen("arquivodeusuarios.txt", "a+");

    // Armazena as informações já existentes
    while (!feof($file)) {
        $user = fgets($file);
        $users[] = $user;
    }

    // Percorre o array para verificar se o Id já existe
    foreach ($users as $user) {
        $user = explode(";", $user);
        if ($user[0] == $username) {
            $userExists = true;
        }
    }

    // Se o Id existir, não adiciona e redireciona para a home
    if ($userExists == true) {
        header("Location: ../view/register.php?error=2");
        fclose($file);
    } else {

        // Se o Id não existir, adiciona a informação no arquivo
        fwrite($file, $text);
        fclose($file);
        header("Location: ../index.php?success=1");
    }
