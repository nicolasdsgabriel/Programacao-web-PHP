<?php
    $nascimento = 1999;
    $ano_atual = 2017;

    $idade_anos = $ano_atual - $nascimento;
    $idade_meses = $idade_anos * 12;
    $idade_dias = $idade_anos * 365;
    $idade_semanas = $idade_anos * 52;

    echo 'Idade em anos: ' . $idade_anos . '<br>';
    echo 'Idade em meses: ' . $idade_meses . '<br>';
    echo 'Idade em dias: ' . $idade_dias . '<br>';
    echo 'Idade em semanas: ' . $idade_semanas . '<br>';
?>