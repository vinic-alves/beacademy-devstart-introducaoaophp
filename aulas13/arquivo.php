<?php

$arquivo = fopen('produtos.csv', 'a+');

fwrite($arquivo, 'Vinicius'.PHP_EOL);
fwrite($arquivo, 'Mariane'.PHP_EOL);
fwrite($arquivo, 'Taiane'.PHP_EOL);

fclose($arquivo);   //comanda para que seja fechado o arquivo