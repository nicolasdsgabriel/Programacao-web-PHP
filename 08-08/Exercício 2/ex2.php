<?php

    //Faça uma página HTML para enviar três números inteiros para um programa PHP, que recupera os números e retorna-os uma nova página HTML em ordem crescente. Suponha que o usuário sempre digitará três números diferentes.

    $num1 = $_GET["num1"]; //$_GET é quem armazena os valores enviados pela página html
    $num2 = $_GET["num2"];
    $num3 = $_GET["num3"];

    if ($num1>$num2&&$num2>$num3) {
        echo $num3 . '<br>' . $num2 . '<br>' . $num1;
    }else if ($num1>$num3&&$num3>$num2) {
        echo $num2 . '<br>' . $num3 . '<br>' . $num1;
    }else if ($num2>$num1&&$num1>$num3) {
        echo $num3 . '<br>' . $num1 . '<br>' . $num2;
    }else if ($num2>$num3&&$num3>$num1) {
        echo $num1 . '<br>' . $num3 . '<br>' . $num2;
    }else if ($num3>$num2&&$num2>$num1) {
        echo $num1 . '<br>' . $num2 . '<br>' . $num3;
    }else if ($num3>$num1&&$num1>$num2) {
        echo $num2 . '<br>' . $num1 . '<br>' . $num3;
    }
?>