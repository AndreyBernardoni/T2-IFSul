<?php

// Sessão iniciada para armazenar o nome do produto e a quantidade
session_start();

if (isset($_GET['query'])) {

    $query = $_GET['query'];

    // Boolean para verificar se o produto foi encontrado

    $found = false;
    $products = array();
    $file = fopen("products.txt", "r");

    // Enquanto não for o fim do arquivo, pega o produto e armazena no array
    while (!feof($file)) {
        $product = fgets($file);
        $products[] = $product;
    }

    // Fecha o arquivo
    fclose($file);

    // Percorre o array de produtos em busca do produto
    foreach ($products as $product) {
        $product = explode(";", $product);
        if ($product[0] == $query) {
            // Se o produto for encontrado, armazena o nome e a quantidade
            $_SESSION['queryName'] = $product[1];
            $_SESSION['queryQuantity'] = $product[3];
            $found = true;
            break;
        }
    }

    if ($found == true) {
        // Se o produto foi encontrado, redireciona para a página de produto
        header("Location: ../view/product.php");
    } else {
        // Se o produto não foi encontrado, redireciona para a página de erro
        header("Location: ../view/notFound.php?query=$query");
    }
}
