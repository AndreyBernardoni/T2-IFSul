<?php
    $name = str_replace(';', '-', $_POST['name']);
    $email = str_replace(';', '-', $_POST['email']);
    $phone = str_replace(';', '-', $_POST['phone']);

    $text = $name . ";" . $email . ";" . $phone . PHP_EOL;
    
    $file = fopen("contacts.txt", "a");
    fwrite($file, $text);

    fclose($file);

    header("Location: ../index.php");
?>