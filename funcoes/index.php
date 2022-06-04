<?php
declare(strict_types= 1);   // se coloca no inicio do arquivo
function soma(int $n1,int $n2){
    return $n1 + $n2;
}

echo soma(10, 2);

echo PHP_EOL. '-----------------'. PHP_EOL;   // quebra de linha no terminal

echo soma (10,90);