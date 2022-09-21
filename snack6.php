<?php

$db = [
  'teachers' => [
    [
      'name' => 'Michele',
      'lastname' => 'Papagni'
    ],
    [
      'name' => 'Fabio',
      'lastname' => 'Forghieri'
    ]
  ],
  'pm' => [
    [
      'name' => 'Roberto',
      'lastname' => 'Marazzini'
    ],
    [
      'name' => 'Federico',
      'lastname' => 'Pellegrini'
    ]
  ]
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>snack6</title>
</head>

<body>
  <div style="background-color: grey;">
    <ul>
      <?php
      for ($i = 0; $i < count($db['teachers']); $i++) {
        $teacher = $db['teachers'][$i];
      ?>
        <li>
          <?php echo "{$teacher['name']} {$teacher['lastname']}" ?>
        </li>
      <?php
      }
      ?>
    </ul>
  </div>
  <div style="background-color: green;">
    <ul>
      <?php
      for ($i = 0; $i < count($db['pm']); $i++) {
        $pm = $db['pm'][$i];
      ?>
        <li>
          <?php echo "{$pm['name']} {$pm['lastname']}" ?>
        </li>
      <?php
      }
      ?>
    </ul>
  </div>
</body>

</html>