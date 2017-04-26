<?php

require __DIR__ . '/vendor/autoload.php';

function hi($lastName, $gender) {
    if ($gender == 'm') {
        $t = 'Mr. ';
    } else if ($gender == 'f') {
        $t = 'Miss. ';
    } else {
        $t = '??? ';
    }

    dump('Hi, ' . $t . $lastName);
} 

$names = ['Green', 'Black', 'Page'];
$gender = ['m'];
array_map('hi', $names, $gender);

dump('-----------------');

$gender = ['m', 'f', 'm'];
array_map('hi', $names, $gender);
