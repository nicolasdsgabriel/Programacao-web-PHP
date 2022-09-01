<?php
    //O governo federal abriu uma linha de crédito para os servidores federais. O valor máximo da prestação não poderá ultrapassar 30% do salário bruto. Fazer um programa em PHP que receba, por meio de uma página HTML, o salário bruto e o valor da prestação, e informar se o empréstimo pode ou não ser concedido.

    $sal = $_GET['sal'];
    $prestacao = $_GET['prestacao'];

    $limite = $sal * 0.30;

    if ($prestacao > $limite)
        echo 'Empréstimo negado';
    else
        echo 'Empréstimo aceito';
?>