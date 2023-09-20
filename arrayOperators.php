<?php

// SOMA DE ARRAYS

$user = [
    'name' => 'João Vitor',
    'age' => '21'
];

$workplace = [
    'companyName' => 'SMB Store',
    'role' => 'Help Desk Junior (focal)'
];

$all = $user + $workplace;

print_r($all);

// IGUALDADE DE ARRAYS

$userOne = [
    'name' => 'Sasuke',
    'age' => '18'
];

$userTwo = [
    'name' => 'Naruto',
    'age' => '18'
];

var_dump( value: $userOne === $userTwo);



?>

