<?php
$massa = 40;
$altura = 1.60;
$imc = $massa / $altura ** 2;
echo "O seu IMC é de $imc.".PHP_EOL;
if ($imc < 16){
    echo "Magreza grave! Vá pro Mc Donald's agora!".PHP_EOL;
} elseif ($imc <= 25){
    echo "Você está na faixa saudável, continue assim!".PHP_EOL;
} else {
    echo "Você está com sobrepeso ou obeso, cuidado!".PHP_EOL;
}