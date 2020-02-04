<?php
$idade = 16;
$nome = "Vinícius";
echo "Pré-Requisitos:" .PHP_EOL;
echo "Você só poderá entrar à partir dos 18 anos." .PHP_EOL;
echo "E se o seu nome for Vinícius." .PHP_EOL;
if ($idade >= 18 && $nome == "Vinícius") {
    echo "Você tem $idade anos." .PHP_EOL;
    echo "O seu nome é $nome." .PHP_EOL;
    echo 'Pode entrar' .PHP_EOL;
}
else if ($idade < 18 || $nome != "Vinícius") {
    echo "Você tem $idade anos e se chama $nome, por isso NÃO pode entrar." . PHP_EOL;
}
echo PHP_EOL;
echo "Thauzinho!";