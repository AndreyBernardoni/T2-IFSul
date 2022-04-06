<html>

<head>
    <meta charset="utf-8" />
    <title>Login</title>

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
                        <h4 class="text-center">Login</h4>

                        <?php if (isset($_GET['error']) && $_GET['error'] == 1) { ?>
                            <div class="alert alert-danger" role="alert">
                                Preencha todos os campos!
                            </div>
                        <?php }
                        
                        if (isset($_GET['error']) && $_GET['error'] == 2) { ?>
                            <div class="alert alert-danger" role="alert">
                                Login ou senha incorretos!
                            </div>
                        <?php }
                        
                        if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
                            <div class="alert alert-success" role="alert">
                                Usuário cadastrado com sucesso!
                            </div>
                        <?php } ?>

                    </div>

                    <div class="card-body">

                        <form action="controller/router.php" method="post">
                            <div class="form-group">
                                <label for="user">Usuário</label>
                                <input type="text" name="user" id="user" class="form-control" placeholder="Usuário">
                            </div>

                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Senha">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block" value="login" name="login">Entrar</button>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-danger btn-block" value="register" name="register">Cadastrar</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>