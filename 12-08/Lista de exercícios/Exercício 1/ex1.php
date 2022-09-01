<?php
    //Elaborar um programa em PHP que recebe de uma página web 3 valores inteiros e positivos A, B, C e verifica se eles formam ou não um triângulo. Caso os valores formem um triângulo, deve-se calcular e imprimir o valor do perímetro do triângulo, indicando com uma mensagem se este é equilátero (três lados iguais), isósceles (apenas 2 lados iguais) ou escaleno (todos os lados são diferentes). Se os valores não formam um triângulo, escrever uma mensagem informando o fato. Lembre-se que em um triângulo, o comprimento de cada lado deve ser menor que a soma dos outros dois lados.

    $A = $_GET['A'];
    $B = $_GET['B'];
    $C = $_GET['C'];

    if ($A < $B + $C && $B < $A + $C && $C < $B + $A) {
        $perimetro = $A + $B + $C;
        
        echo 'Perímetro igual a ' . $perimetro . '<br>';

        if ($A == $B && $B == $C) {
            echo 'É um triângulo equilátero';
        }
        if ($A == $B || $A == $C || $B == $C) {
            echo 'É um triângulo isóceles';
        }
        if ($A != $B && $A != $C && $B != $C) {
            echo 'É um triângulo escaleno';
        }
    }else {
        echo 'Não satisfaz as condições da existẽncia de um triângulo';
    }

?>