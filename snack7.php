<?php
  $studenti = [
    [
      "nome" => "Nigel",
      "cognome" => "Di Nella",
      "eta" => 26,
      "voti" => 
      [
        "matematica" => 10,
        "scienze" => 8,
        "inglese" => 4,
        "latino" => 7,
        "storia" => 6,
        "geografia" => 5, 
      ],

    ],
    [
      "nome" => "Valerio",
      "cognome" => "Seccia",
      "eta" => 25,
      "voti" => 
      [
        "matematica" => 5,
        "scienze" => 9,
        "inglese" => 9,
        "latino" => 8,
        "storia" => 10,
        "geografia" => 7, 
      ],

    ],
    [
      "nome" => "Remo",
      "cognome" => "Recchia",
      "eta" => 27,
      "voti" => 
      [
        "matematica" => 4,
        "scienze" => 4,
        "inglese" => 10,
        "latino" => 10,
        "storia" => 5,
        "geografia" => 3, 
      ],

    ],
    
  ];


  for ($i=0; $i < count($studenti); $i++) { 
    $studente = $studenti[$i];
    $votiTotali = array_values($studente['voti']);
    $sommaVoti = 0;
      for ($j=0; $j < count($votiTotali); $j++) { 
        $voto = $votiTotali[$j];
        $sommaVoti += $voto;
        $mediaVoti = round($sommaVoti / count($votiTotali), 2) ;
      };
    echo "{$studente['nome']} {$studente['cognome']}, etá : {$studente['eta']} anni, media voti: {$mediaVoti} <br>";
  };
?>