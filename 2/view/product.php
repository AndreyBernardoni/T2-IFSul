<?php

// Inicia a sessão para acessar as variáveis
session_start();

?>

<html>

<head>
    <meta charset="utf-8" />
    <title>Produtos</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .card-seletor {
            padding: 15vh 0 0 0;
            width: 100%;
            margin: 0 auto;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            Andrey Fialho 2T
        </a>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="../../index.php" class="nav-link">Questões</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">



            <div class="card-seletor">
                <div class="card">
                    <div class="card-header">
                        <h4>Lista de Produtos</h4>
                    </div>

                    <div class="card-body">

                        <div class="card mb-3 bg-light">
                            <div class="card-body">

                                <h5 class="card-title"><?= $_SESSION['queryName'] ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Quantidade: <?= $_SESSION['queryQuantity'] ?></h6>

                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-12">
                                <a class="btn btn-lg btn-success btn-block" href="../index.php">Voltar</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</body>

</html>