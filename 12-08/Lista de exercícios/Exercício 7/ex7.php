<?php
    //Criar um programa em PHP que informe a quantidade total de calorias de uma refeição a partir do usuário, que deverá informar o prato, a sobremesa e a bebida por meio de uma página HTML.

    $prato = $_GET['prato'];
    $sobremesa = $_GET['sobremesa'];
    $bebida = $_GET['bebida'];

    if ($prato == 'vegetariano')
        $prato = 180;
    if ($prato == 'peixe')
        $prato = 230;
    if ($prato == 'frango')
        $prato = 250;
    if ($prato == 'carne')
        $prato = 350;

    if ($sobremesa == 'abacaxi')
        $sobremesa = 75;
    if ($sobremesa == 'sorvete')
        $sobremesa = 110;
    if ($sobremesa == 'mouse_d')
        $sobremesa = 170;
    if ($sobremesa == 'mouse_c')
        $sobremesa = 200;

    if ($bebida == 'cha')
        $bebida = 20;
    if ($bebida == 'suco_l')
        $bebida = 70;
    if ($bebida == 'suco_m')
        $bebida = 100;
    if ($bebida == 'refri')
        $bebida = 65;

    $refeicao = $prato + $sobremesa + $bebida;

    echo 'Total de calorias da refeição: ' . $refeicao . ' cal';
?>