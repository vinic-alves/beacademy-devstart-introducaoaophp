<?php

declare(strict_types=1);

function welcome (string $nome): string
{
    return "Bem vindo {$nome}";
}
function soma(float $n1,float $n2): float
{
    return $n1 + $n2;
}

function mostrarNome(array $nomes): void{       //void significa que a função não tem retorno
    foreach ($nomes as $cadaNome){
        echo "Nome: " . $cadaNome.PHP_EOL;
    }
}

mostrarNome(['Joaquim', 'Luzia', 'Helena', 'Mariane']);