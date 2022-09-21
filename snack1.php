<?php
$matches = [
  [
    'casa' => 'Pescara',
    'ospite' => 'Teramo',
    'punteggio_casa' =>  90,
    'punteggio_ospite' => 88,
  ],
  [
    'casa' => 'Pisa',
    'ospite' => 'Livorno',
    'punteggio_casa' =>  110,
    'punteggio_ospite' => 87,
  ],
  [
    'casa' => 'Bari',
    'ospite' => 'Foggia',
    'punteggio_casa' =>  84,
    'punteggio_ospite' => 96,
  ],
];
?>
<ol>
  <?php
   for ($i = 0; $i < count($matches); $i++) {
    $match = $matches[$i];
  ?>
    <li>
      <?php echo "{$match['casa']} - {$match['ospite']}" ?>
      = <strong> <?php echo "{$match['punteggio_casa']} - {$match['punteggio_ospite']}" ?></strong>
    </li>
  <?php
    } 
  ?>
</ol>