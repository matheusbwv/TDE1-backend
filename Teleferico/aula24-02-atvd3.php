<?php
$C = (int)readline();
$A = (int)readline();

$alunosPorViagem = $C - 1;

$viagens = (int)ceil($A / $alunosPorViagem);

echo $viagens . "\n";

?>