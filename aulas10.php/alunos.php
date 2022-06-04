<?php

$a1 = [
    'nome'=>'Chiquim',
    'email'=>'chiquim@email.com',
    'telefone'=>'85 9 2222004',
    [
        9,
        8.9,
        4.3,
        5.3

    ]
];
$a2 = [
    'nome'=>'maria',
    'email'=>'maria@gmail.com',
    'telefone'=>'190190190190',
    [
        9,
        8.9,
        4.3,
        5.3

    ]
];


$alunos = [
    $a1,
    $a2,
];


?>

<table border= "1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($alunos as $cadaAluno){
                echo '<tr>';
                    echo '<td>' .$cadaAluno['nome'] . '</td>';
                    echo '<td>' .$cadaAluno['email'] . '</td>';
                    echo '<td>' .$cadaAluno['telefone'] . '</td>';
                echo '</tr>';
                echo $cadaAluno['nome'] . '<br>';
            }
        ?>
    </tbody>
</table>