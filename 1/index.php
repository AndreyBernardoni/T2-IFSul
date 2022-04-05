<?php
$file = fopen("controller/contacts.txt", "r");

$contacts = array();

while (!feof($file)) {
    $contact = fgets($file);
    $contacts[] = $contact;
}

fclose($file);
?>

<html>

<head>
    <meta charset="utf-8" />
    <title>Contatos</title>

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

    </nav>

    <div class="container">
        <div class="row">

            <div class="card-seletor">
                <div class="card">
                    <div class="card-header">
                        <h4>Lista de Contatos</h4>
                    </div>

                    <div class="card-body">

                        <div class="card mb-3 bg-light">
                            <div class="card-body">

                                <?php
                                
                                
                                foreach ($contacts as $contact) {
                                    $contactInfo = explode(";", $contact);
                                    if (count($contactInfo) < 3) {
                                        continue;
                                    }

                                ?>

                                    <h5 class="card-title"><?= $contactInfo[0] ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?= $contactInfo[1] ?></h6>
                                    <p class="card-text"><?= $contactInfo[2] ?></p>

                                <?php } ?>

                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-12">
                                <a class="btn btn-lg btn-success btn-block" href="view/register.php">Registrar Contato</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</body>

</html>