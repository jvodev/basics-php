<?php

$user = [
    //'name' => 'João Vitor', // se não tiver este valor
    'age' => 21,
    'twitch' => 'Member'
];

echo $user['name'] ?? 'Usuário'; // ele retorna este.


?>