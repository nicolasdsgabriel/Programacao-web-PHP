<?php
    //Fazer um programa na Linguagem PHP para receber a idade de uma pessoa e informar sua classe eleitoral, que pode ser:
    
    //• Não eleitor (abaixo de 16 anos);
    //• Eleitor obrigatório (entre 18 e 65 anos);
    //• Eleitor facultativo (entre 16 e 18 anos e maior de 65)

    $idade = $_GET['idade'];

    if ($idade < 16)
        echo 'Não eleitor';

    if ($idade >= 18 && $idade <= 65)
        echo 'Eleitor obrigatório';

    if ($idade >= 16 && $idade <= 18 && $idade > 65)
        echo 'Eleitor facultativo';
?>