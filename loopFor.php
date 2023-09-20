<?php

/**
 * Aula sobre laço de repetição FOR
 * 
 * Nessa aula aprendemos sobre o laço de repetição.
 */

echo "João está estudando na escola" . PHP_EOL;

for ($borrachada = 0; $borrachada <= 7; $borrachada++) {
    echo "O joão tomou " . $borrachada . " borrachada do guidão" . PHP_EOL;
        }

echo "João está enfurecido" . PHP_EOL;

$tabuada = 7;

for($i = 1; $i <= 10; $i++) {
    echo "$tabuada x $i = " . ($tabuada * $i) . PHP_EOL;
}

?>