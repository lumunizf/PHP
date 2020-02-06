<?php

$conta1 = ['titular' => 'Angélica', 'saldo' => 1000];
$conta2 = ['titular' => 'Salvio', 'saldo' => 10000];
$conta3 = ['titular' => 'Jonas', 'saldo' => 500];

$contascorrentes = [$conta1, $conta2, $conta3];

foreach ($contascorrentes as $conta){
    echo $conta['titular'].PHP_EOL;
}