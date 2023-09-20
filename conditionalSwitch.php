<?php

/** Estrutura condicional de casos
 *  A idéia é fazer condições com uma lista pré definida de valores
 *  que podem retornar verdadeira, tendo uma única opção para retornar * 
 *  falso, sendo ela a default: (padrão)* 
 * 
 * EX:  TROQUE (CONDIÇÃO)   {
 *          caso VALOR1;
 *              diga 'caneta';
 *              pare;
 *          caso VALOR2;
 *              diga 'lapis';
 *              pare;
 *          caso não:
 *              diga: 'imediatamente';
 * }
 */

$name = 'Luana';

switch ($name)  {
    case 'João';
        echo 'Salve João';
        break;

    case 'Luana';
        echo 'Olá Luana';
        break;

    default: 
        echo 'Salve aleatório';
}


?>