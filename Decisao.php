<?php

    $idade = 16;
    $numeroDePessoas = 2;

    echo "Você só pode entrar se for maior de idade ou se tiver pelo menos 15 anos e estiver acompanhado.".PHP_EOL.PHP_EOL;

    if ($idade >= 18) {

        echo "Você tem $idade anos.".PHP_EOL."Pode entrar.".PHP_EOL;

    } else if ($idade >= 15 && $numeroDePessoas >= 2) {

        echo "Você só tem $idade anos, mas está acompanhado".PHP_EOL."Pode entrar.".PHP_EOL;

    } else {

        echo "Você só tem $idade anos".PHP_EOL."Desculpe, você não pode entrar.".PHP_EOL;

    }

    echo "Adeus!";