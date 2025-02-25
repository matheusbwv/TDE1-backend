<?php 
  $entrada = explode(' ', (readline()));
  $N = (int)$entrada[0];
  $H = (int)$entrada[1];

  $alturas = explode(' ', (readline()));
  $count = 0;

  for ($i = 0; $i < $N; $i++) {
    if ($H >= (int)$alturas[$i]) { 
      $count++; 
    }
  }

  echo $count . "\n";

?>