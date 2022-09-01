<?php
    //Elabore um programa PHP que calcule o valor a ser pago por uma compra, considerando o preço normal de etiqueta e a escolha da condição de pagamento (enviados por meio de um formulário HTML), e de acordo com os seguintes critérios:

    //Código - Condição de pagamento
    //1 - À vista em dinheiro ou cheque, recebe 10% de desconto.
    //2 - À vista no cartão de crédito, recebe 5% de desconto.
    //3 - Em 2 vezes, preço normal da etiqueta sem juros.
    //4 - Em 3 vezes, preço normal da etiqueta mais juros de 10%.

    $etiqueta = $_GET['etiqueta'];
    $pagamento = $_GET['pagamento'];
    $desconto;
    $juros;

    if ($pagamento == 1) {
        $desconto = $etiqueta * 0.10;
        $etiqueta = $etiqueta - $desconto;

        echo 'Valor a ser pago: R$ ' . $etiqueta;
    }else if ($pagamento == 2) {
        $desconto = $etiqueta * 0.05;
        $etiqueta = $etiqueta - $desconto;

        echo 'Valor a ser pago: R$ ' . $etiqueta;
    }else if ($pagamento == 3) {
        $etiqueta = $etiqueta / 2;
        $etiqueta = number_format($etiqueta, 2);

        echo 'Valor a ser pago: R$ ' . $etiqueta . ' por mês, durante dois meses';
    }else if ($pagamento == 4) {
        $juros = $etiqueta * 0.10;
        $etiqueta = ($etiqueta + $juros) / 3;
        $etiqueta = number_format($etiqueta, 2);

        echo 'Valor a ser pago: R$ ' . $etiqueta . ' por mês, durante três meses';
    }


?>