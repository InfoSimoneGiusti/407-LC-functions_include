<?php

    $variabile = "pippo";

    function somma($a, $b) {

        echo $variabile; //solleva un warning

        return $a + $b;
    }

    echo somma(5,3);