<?php


    $myArray = [1,3,4,5,6,7,8,10];

    $arrayFiltratoPari = array_filter($myArray, 'checkPari');


    function checkPari($numero) {
        return $numero % 2 == 0;
    }

    var_dump($arrayFiltratoPari);