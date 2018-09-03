<?php
  $firstVar = 1;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
  </head>
  <body>
    <?php
      while ($firstVar < 10) {
        echo ' | ' . $firstVar;
        $firstVar = $firstVar + ($firstVar / 2);
      }
     ?>
  </body>
</html>
