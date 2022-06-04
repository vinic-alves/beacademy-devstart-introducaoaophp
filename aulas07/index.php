<?php

// Operador Ternario

$idade = 17;

echo $idade >= 18 ? "de maior" : "de menor";
echo "<br>";

// funcao isset verifica se algo existe ou contem
echo isset($nome) ? $nome : "Nome não definido";

// Nova forma de ternario do php 7

echo $nome ?? "nome não definido"; // o "??" é o Spread operator
                                   // testa se existe algo na esquerda
                                  # se não existe mostra o que esta na direita;