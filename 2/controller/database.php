<?php

    

    $id = str_replace(';', '-', $_POST['id']);
    $name = str_replace(';', '-', $_POST['name']);
    $date = str_replace(';', '-', $_POST['date']);
    $quantity = str_replace(';', '-', $_POST['quantity']);

    $text = $id . ";" . $name . ";" . $date . ";" . $quantity . PHP_EOL;
    
    $file = fopen("products.txt", "a+");

    $products = array();

    while (!feof($file)) {
        $product = fgets($file);
        $products[] = $product;
    }

    $idExists = false;

    foreach ($products as $product) {
        $product = explode(";", $product);
        if ($product[0] == $id) {
            $idExists = true;
        }
    }

    if ($idExists == true) {
        header("Location: ../index.php?error=1");
        fclose($file);
    }else{
        fwrite($file, $text);
        fclose($file);
        header("Location: ../index.php");
    }

