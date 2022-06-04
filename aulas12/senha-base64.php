<?php

$senha = '123456';
$code = 'MTIzNDU2';

echo base64_encode($senha) .PHP_EOL;  //FUNÇÃO USADA PARA "TRANSFORMAR UMA STRING, NO EXEMPLO AQUI UMA SENHA"
echo base64_decode($code);
