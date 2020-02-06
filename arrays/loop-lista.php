<?php
$idadeList = [21, 23, 19, 25, 30, 41, 18];
// Comando para contar quantas posições tem um array
echo "Qual o tamanho deste array?".PHP_EOL;
echo count($idadeList).PHP_EOL;

// Dá para substituir no laço for o i < 7 pelo resultado da função
for ($i = 0; $i < count($idadeList); $i++){
    echo $idadeList[$i].PHP_EOL;
}