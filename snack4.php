<?php 
    $randomNumbers = [];

    while ( count($randomNumbers) < 15) {
        $randomNumber =  rand(1, 50);

        if( !in_array($randomNumber, $randomNumbers) ) {
            $randomNumbers[] = $randomNumber;
        } 
    }

    var_dump($randomNumbers)
?>



