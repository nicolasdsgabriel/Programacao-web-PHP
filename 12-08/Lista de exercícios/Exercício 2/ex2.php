<?php
    //Escreva um programa em PHP que recebe de uma página HTML as coordenadas (X,Y) de um ponto no sistema cartesiano e escrever o quadrante ao qual o ponto pertence. Caso o ponto não pertença a nenhum quadrante, escrever se ele está sobre o eixo X, eixo Y ou na origem.

    $X = $_GET['X'];
    $Y = $_GET['Y'];

    echo 'Coordenadas: (' . $X . ',' . $Y . ')' . '<br>';

    if ($X > 0 && $Y > 0) 
       echo 'Se localiza no primeiro quadrante';
    
    if ($X < 0 && $Y > 0) 
        echo 'Se localiza no segundo quadrante';
     
    if ($X < 0 && $Y < 0) 
        echo 'Se localiza no terceiro quadrante';
    
    if ($X > 0 && $Y < 0) 
        echo 'Se localiza no quarto quadrante';
    
    if ($X == 0 && $Y < 0 || $Y > 0) {
        echo 'O ponto está no eixo Y';
    }

    if ($Y == 0 && $X < 0 || $X > 0) {
        echo 'O ponto está no eixo X';
    }

    if ($X == 0 && $Y == 0) {
        echo 'O ponto está na origem';
    }
    
?>