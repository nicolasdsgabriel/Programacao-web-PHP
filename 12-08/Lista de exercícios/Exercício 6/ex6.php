<?php
    //Faça uma página HTML para enviar número inteiro entre 1 e 7 para um programa PHP, que deverá escreva o dia da semana correspondente. Caso o usuário digite um número fora desse intervalo, deverá aparecer uma mensagem informando que não existe dia da semana com esse número.

    $dia = $_GET['dia'];

    if ($dia < 1 || $dia > 7)
        echo 'Não existe um dia da semana correspondente a esse número';
    if ($dia == 1)
        echo 'Domingo';
    if ($dia == 2)
        echo 'Segunda-Feira';
    if ($dia == 3)
        echo 'Terça-Feira';
    if ($dia == 4)
        echo 'Quarta-Feira';
    if ($dia == 5)
        echo 'Quinta-Feira';
    if ($dia == 6)
        echo 'Sexta-Feira';
    if ($dia == 7)
        echo 'Sábado';
    
?>