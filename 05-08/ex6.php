<?php
    $deposito = 4000;
    $juros = $deposito * 0.0067;
    $valor_total = $deposito + $juros;

    echo 'Valor do rendimento: ' . $juros . '<br>';
    echo 'Valor total: ' . $valor_total . '<br>';
?>