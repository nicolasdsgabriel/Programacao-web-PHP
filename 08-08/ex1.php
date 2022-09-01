<?php
   
    //Faça uma página HTML para enviar três notas de um aluno para um programa PHP, que recupera as notas, calcula e retorna uma nova página HTML com a média aritmética das notas do aluno e a mensagem constante na tabela a seguir:
    //Média aritmética - Mensagem
    //Média < 4,0 - Reprovado
    //4,0 >= Média < 6,0 - Reavaliação
    //Média >= 6,0 - Aprovado

    $nota1 = 10;
    $nota2 = 7;
    $nota3 = 5;

    $med = ($nota1 + $nota2 + $nota3)/3;

    if ($med>=6) {
        
        echo 'Aprovado';
    } else if ($med>=4&&$med<6) {
        
        echo 'Reavaliação';
    } else if ($med<4) {
        
        echo 'Reprovado';
    }


?>