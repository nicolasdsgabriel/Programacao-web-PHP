<?php
    //Uma empresa concederá um aumento de salário aos seus funcionários, variável de acordo com o cargo, conforme a tabela abaixo. Faça um programa em PHP que recebe de uma página web o salário e o cargo de um funcionário, e calcule o novo salário. Se o cargo do funcionário não estiver na tabela, ele deverá, então, receber 40% de aumento. Mostre o salário antigo, o novo salário e a diferença entre o salário antigo e o novo salário.

    //Cargo - Percentual 
    //Gerente - 10% 
    //Engenheiro - 20% 
    //Técnico - 30%

    $cargo = $_GET['cargo'];
    $salario = $_GET['salario'];
    $sal_final;
    
    if ($cargo == 'gerente') {
        $aumento = $salario * 0.10;
        $sal_final = $salario + $aumento;

        echo 'Sálario antigo: ' . $salario . '<br>' . 'Salário atual: ' . $sal_final . '<br>' . 'Diferença: ' . $aumento;
    }
    if ($cargo == 'engenheiro') {
        $aumento = $salario * 0.20;
        $sal_final = $salario + $aumento;

        echo 'Sálario antigo: ' . $salario . '<br>' . 'Salário atual: ' . $sal_final . '<br>' . 'Diferença: ' . $aumento;
    }
    if ($cargo == 'tecnico') {
        $aumento = $salario * 0.30;
        $sal_final = $salario + $aumento;

        echo 'Sálario antigo: ' . $salario . '<br>' . 'Salário atual: ' . $sal_final . '<br>' . 'Diferença: ' . $aumento;
    }
    if ($cargo == 'outro') {
        $aumento = $salario * 0.40;
        $sal_final = $salario + $aumento;

        echo 'Sálario antigo: ' . $salario . '<br>' . 'Salário atual: ' . $sal_final . '<br>' . 'Diferença: ' . $aumento;
    }



?>