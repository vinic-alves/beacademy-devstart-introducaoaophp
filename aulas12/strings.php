<?php

// Exercício achar funções para transformar os nomes igual aos comentarios ao lado

$nome = 'alessandro'; // Alessandro
$sobrenome = 'FEITOSA'; // Feitosa

$nome2 = 'chiquim da silva'; // Chiquim Da Silva;

echo "Nome: " . ucfirst($nome) . PHP_EOL;
echo "Sobrenome: " . ucfirst(strtolower($sobrenome)). PHP_EOL;
echo "Nome2 " . ucwords($nome2);
