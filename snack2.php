<?php
    $name = $_GET['nome'];
    $email = $_GET['email'];
    $age = $_GET['eta'];

    if( 
        strlen($name) > 3 &&
        strpos($email, '@') !== false &&
        strpos($email, '.') !== false && 
        is_numeric($age)
    ) {
        echo 'Accesso riuscito';
    } else {
        echo 'Accesso negato';
    }
?>