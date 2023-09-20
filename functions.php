<?php
/**
 * Aula sobre funções
 * 
 * A ideia de uma função é criar um bloco de código reutilizável 
 * onde podemos aplicar tanto para utilizar em outras partes do código
 * quanto melhorar sua legibilidade
 * 
 * Sintaxe de criação de uma função:
 * 
 * function NOME_DA_FUNCAO(argumentos) {}
 * 
 */

 echo date(format: 'Y-m-d H:i:s ') . "João Vitor " . strtoupper("Salve") . PHP_EOL;

 function sendMessage(string $nickname, string $message) {
    echo "[" . date(format: 'Y-m-d H:i:s ') . "$nickname: " . strtoupper($message) . PHP_EOL;
 }

 sendMessage( nickname: 'João Vitor', message: 'Oláááááááá');