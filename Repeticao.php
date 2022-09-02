<?php

    for ($i = 0; $i <= 15 ; $i++) {

        if($i == 5) {

            continue;

        }
        echo $i.PHP_EOL;

    }

    while ($i <= 30) {

        if($i == 19) {

            $i += 1;
            continue;

        }
        echo $i . PHP_EOL;
            $i += 1;

    }

    do {

        if($i > 42) {

            break;

        }
        echo $i . PHP_EOL;
        $i += 1;

    } while ($i <= 45);