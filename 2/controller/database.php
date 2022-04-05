<?php

    // Boolean para verificar se o Id já existe
    $idExists = false;

    // Criação de um array vazio
    $products = array();

    // Separa as informações em variaveis
    $id = str_replace(';', '-', $_POST['id']);
    $name = str_replace(';', '-', $_POST['name']);
    $date = str_replace(';', '-', $_POST['date']);
    $quantity = str_replace(';', '-', $_POST['quantity']);

    // Cria uma string com as informações
    $text = $id . ";" . $name . ";" . $date . ";" . $quantity . PHP_EOL;

    // Abre o arquivo para escrita
    $file = fopen("products.txt", "a+");

    // Armazena as informações já existentes
    while (!feof($file)) {
        $product = fgets($file);
        $products[] = $product;
    }

    // Percorre o array para verificar se o Id já existe
    foreach ($products as $product) {
        $product = explode(";", $product);
        if ($product[0] == $id) {
            $idExists = true;
        }
    }

    // Se o Id existir, não adiciona e redireciona para a home
    if ($idExists == true) {
        header("Location: ../index.php?error=1");
        fclose($file);
    } else {

        // Se o Id não existir, adiciona a informação no arquivo
        fwrite($file, $text);
        fclose($file);
        header("Location: ../index.php");
    }
