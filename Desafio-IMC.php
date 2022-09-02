<?php

    $peso = 143.5;
    $altura = 1.75;

    $imc = $peso / ($altura * $altura);
    if($imc < 18.5) {

        $pesoIdeal = 18.5 * ($altura * $altura);
        $diferencaPesoIdeal = $pesoIdeal - $peso;
        $resposta2 = "ganhar";

    } else if($imc > 24.99) {

        $pesoIdeal = 24.99 * ($altura * $altura);
        $diferencaPesoIdeal = $peso - $pesoIdeal;
        $resposta2 = "perder";

    }

    echo "Você pesa $peso Kg e mede $altura m. Seu imc é de $imc.".PHP_EOL;
    if($imc < 17) {

        $resposta1 = "muito abaixo do peso ideal.".PHP_EOL;

    } else if($imc < 18.5) {

        $resposta1 = "abaixo do peso ideal.".PHP_EOL;

    } else if($imc < 25) {

        $resposta1 = "com o peso ideal.".PHP_EOL;

    } else if($imc < 30) {

        $resposta1 = "acima do peso ideal.".PHP_EOL;

    } else if($imc < 35) {

        $resposta1 = "com obesidade.".PHP_EOL;

    } else if($imc < 40) {

        $resposta1 = "com obesidade severa.".PHP_EOL;

    } else {

        $resposta1 = "com obesidade mórbida.".PHP_EOL;

    }
    echo "Você está $resposta1";
    if($imc <= 18.5 && $imc < 25) {

        echo "Parabéns.";

    } else {

        echo "Você precisa $resposta2 pelo menos $diferencaPesoIdeal Kg.";

    }