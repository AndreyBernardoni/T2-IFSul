<html>

<head>
    <meta charset="utf-8" />
    <title>Produtos</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .card-register-product {
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
    </nav>

    <div class="container">
        <div class="row">

            <div class="card-register-product">
                <div class="card">
                    <div class="card-header">
                        <h4>Adicionar Produto</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">

                                <form method="post" action="../controller/database.php">

                                    <div class="form-group">
                                        <label>Código</label>
                                        <input type="text" name="id" class="form-control" placeholder="Código" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" name="name" class="form-control" placeholder="Nome" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Data de Compra</label>
                                        <input type="date" name="date" class="form-control" placeholder="Data de Compra" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Quatidade</label>
                                        <input type="number" name="quantity" class="form-control" placeholder="Quantidade" required />
                                    </div>


                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <a class="btn btn-lg btn-warning btn-block" href="../index.php">Voltar</a>
                                        </div>

                                        <div class="col-6">
                                            <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>