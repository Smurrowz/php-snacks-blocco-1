<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'La mia camminata',
            'author' => 'Nigel Di Nella',
            'text' => 'Oggi sono uscito e ho camminato per quasi 12km, niente male.'
        ],
        [
            'title' => 'Aggiornamento post comminata',
            'author' => 'Nigel Di Nella',
            'text' => 'Dopo esser tornato a casa mi sono rilassato 5 minuti e adesso non mi funzionano piú le gambe lol.'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'MI TRASFERISCOOOOO',
            'author' => 'Valerio Seccia',
            'text' => 'Da fine settembre me ne vado a vivere a roma, finalmente.'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Ho comprato Elden Ring',
            'author' => 'Remo Recchia',
            'text' => 'Finalmente é uscito, non ce la facevo piú ad aspettare'
        ],
        [
            'title' => 'Ho finito Elden Ring',
            'author' => 'Remo Recchia',
            'text' => 'Dopo circa 120h l\'ho finito'
        ],
        [
            'title' => 'Ho platinato Elden Ring',
            'author' => 'Remo Recchia',
            'text' => 'alla fine non é stato difficile platinarlo. Non ci sono volute piú di 15h'
        ]
    ],
];
$keys=array_keys($posts);

for ($i=0; $i <count($posts) ; $i++) { 
  $key = $keys[$i];
  $content = $posts[$key];
  echo "<h2> {$key} </h2>";
    for ($j=0; $j < count($content) ; $j++) { 
      $post = $content[$j];
      echo "  <em>{$post['author']}</em> - <strong>{$post['title']}: </strong><br>
      <p>\" {$post['text']} \"</p>";
      
    }
}
?>



