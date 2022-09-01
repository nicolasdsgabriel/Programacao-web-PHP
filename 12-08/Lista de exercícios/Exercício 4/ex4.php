<?php
    //O IMC (Índice de Massa Corporal) é um critério da Organização Mundial de Saúde para dar uma indicação sobre a condição de peso de uma pessoa adulta. A fórmula é IMC = peso / (altura)2. Elabore um programa em PHP que receba o peso e a altura de um adulto e mostre sua condição de acordo com a tabela abaixo.

    //IMC em adultos - Condição
    //Abaixo de 18,5 - Abaixo do peso
    //Entre 18,5 e 25 - Peso normal
    //Entre 25 e 30 - Acima do peso
    //Acima de 30 - Obeso

    $h = $_GET['h'];
    $p = $_GET['p'];
    
    $imc = $p / ($h * $h);

    if ($imc < 18.5) 
        echo 'Abaixo do peso';
    
    if ($imc >= 18.5 && $imc <= 25) 
        echo 'Peso normal';

    if ($imc >= 25 && $imc <= 30) 
        echo 'Acima do peso';

    if ($imc > 30)
        echo 'Obeso';
    



?>