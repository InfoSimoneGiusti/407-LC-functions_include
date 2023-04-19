<?php


    $myArray = [1,3,4,5,6,7,8,10];

    $arrayFiltratoPari = array_filter($myArray, fn($numero) => $numero % 2 == 0);

    var_dump($arrayFiltratoPari);