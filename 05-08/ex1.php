<?php
    $v1 = 10;
    $v2 = 15;
    $v3;

    echo $v1;
    echo $v2;

    $v3 = $v1; //v3 = 10
    $v1 = $v2; //v1 = 15
    $v2 = $v3; //v2 = 10

    echo '$v1<br>'; //tag br usada para pular linha
    echo '$v2';

?>