<?php

/**
 * Aula sobre laço de repetição ForEach
 * 
 * Vamos passar algum dado iteravel com uma stdClass ou array
 * podendo separar por chave e valor.
 * 
 *  foreach(dadoIteravel as dado) {}
 */

/*$user = [
    [
    'name' => 'João',
    'idade' => 21,
    'employed' => true
    ],
    [
    'name' => 'Luana',
    'idade' => 23,
    'employed' => false
    ],
    [
    'name' => 'Marilia',
    'idade' => 49,
    'employed' => true
    ]
];

foreach ($user as $key => $value) {
    echo $key .  " " . $value['name'] . PHP_EOL;
}

$user2 = new StdClass;

$user2->name = "voidthrueyes";
$user2->age = 99;

foreach($user2 as $key => $value) {
    echo $key .  " " . $value . PHP_EOL;
}

$names = ['João', 'Luana', 'Michel', 'Giovana', 'Caique', 'Amanda'];

foreach ($names as $key => $name) {
    echo $key . " " . $name . PHP_EOL;
}

*/

$alunos = ['João' => 25, 'Luana' => 30, 'Michel' => 28];

foreach ($alunos as $nome => $idade) {
    echo $nome . ' tem ' . $idade . ' anos.' . PHP_EOL;
}

?>