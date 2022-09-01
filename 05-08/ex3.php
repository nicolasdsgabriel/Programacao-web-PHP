<?php
    $sal_fixo = 1500;
    $venda = 10000;
    $comissao = $venda * 0.04;
    
    echo 'Comissão: R$ ' . $comissao . '<br>';

    $sal_final = $sal_fixo + $comissao;

    echo 'Salário final: R$  ' . $sal_final;
?>