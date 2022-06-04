<?php

$nome = "Vinicius";
$sobrenome = "Alves";
$idade = 27;
$cidade = "New York";

$nome2 = "Chiquim";
$nome2 .= "da Silva"; //outra maneira de concatenar
echo "Meu nome é " . $nome . " E meu sobrenome é " . $sobrenome;

echo "meu nome é ${nome} tenho ${idade} anos e moro em ${cidade}";
// regra !!!!!

#no php template string so funciona com aspas duplas

