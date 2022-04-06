<?php
$file = fopen("controller/products.txt", "r");

$products = array();

while (!feof($file)) {
    $product = fgets($file);
    $products[] = $product;
}

fclose($file);
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
                <a href="../index.php" class="nav-link">Questões</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">



            <div class="card-seletor">
                <div class="card">
                    <div class="card-header">
                        <h4>Lista de Produtos</h4>
                        <?php
                        if (isset($_GET['error']) && $_GET['error'] == 1) {
                            echo '<div class="alert alert-danger" role="alert">
                            Produto já cadastrado!
                        </div>';
                        }
                        ?>
                    </div>

                    <div class="card-body">

                        <div class="card mb-3 bg-light">
                            <div class="card-body">

                                <?php


                                foreach ($products as $product) {
                                    $productInfo = explode(";", $product);
                                    if (count($productInfo) < 3) {
                                        continue;
                                    }
                                ?>

                                    <h5 class="card-title"><?= $productInfo[1] ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Data de Compra: <?= $productInfo[2] ?></h6>
                                    <p class="card-text">Quantidade: <?= $productInfo[3] ?></p>

                                <?php } ?>

                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-12">
                                <a class="btn btn-lg btn-success btn-block" href="view/register.php">Registrar Produto</a>
                            </div>
                        </div>


                        <form action="controller/queryValidator.php" method="get">
                            <div class="row mt-3">

                                <div class="col-9">
                                    <input type="search" class="form-control rounded btn-lg" placeholder="Código" aria-label="Search" name="query" required />
                                </div>

                                <div class="col-3">
                                    <button type="submit" class="btn btn-lg btn-info btn-block">Procurar</button>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>
</body>

</html>

<?php
    if (isset($_SESSION)) {
        session_destroy();
    }
?>