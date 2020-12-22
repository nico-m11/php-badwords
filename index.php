<?php
  $badWord = $_GET["badword"];
  $mia_variabile = 'Dicette ‘o ciciniello vicino ‘o squal : “pur’io sò pesce”';
  $modifica = str_replace($badWord, '***', $mia_variabile);
 ?>
 <!--<h1><?php echo $mia_variabile ?></h1> -->
 <h1><?php echo $modifica ?></h1>
