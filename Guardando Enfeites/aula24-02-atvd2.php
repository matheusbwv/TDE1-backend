<?php

$N = intval(readline());
$matrix = [];


for ($i = 0; $i < $N; $i++) {
    $matrix[] = array_map('intval', explode(' ', readline()));
}

$melhorConf = 0;
$melhorOrdem = [];
$posicoes = range(0, $N - 1);


function calcularConfianca($array) {
    global $matrix, $N;
    $conf = 1;
    for ($i = 0; $i < $N; $i++) {
        $conf *= $matrix[$i][$array[$i]];
    }
    return $conf;
}


function gerarPermutacoes($array, $inicio = 0) {
    global $melhorConf, $melhorOrdem;
    if ($inicio == count($array)) {
        $confAtual = calcularConfianca($array);
        if ($confAtual > $melhorConf) {
            $melhorConf = $confAtual;
            $melhorOrdem = $array;
        }
        return;
    }
    for ($i = $inicio; $i < count($array); $i++) {
        swap($array, $inicio, $i);
        gerarPermutacoes($array, $inicio + 1);
        swap($array, $inicio, $i);
    }
}


function swap(&$array, $i, $j) {
    $temp = $array[$i];
    $array[$i] = $array[$j];
    $array[$j] = $temp;
}

gerarPermutacoes($posicoes);

echo implode(" ", array_map(fn($x) => $x + 1, $melhorOrdem)) . "\n";