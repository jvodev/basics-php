<?php

/**
 * Operadores lógicos 
 * tudo que é booleano é checado antes da expressão
 * operadores: && || ^ !
 */

$empregado = true;
$homeOffice = true;

var_dump(value: $empregado && $homeOffice).PHP_EOL;

var_dump(value: $empregado ^ $homeOffice).PHP_EOL; // UMA TEM QUE SER TRUE E OUTRA FALSE


?>