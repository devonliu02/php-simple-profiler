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


/*
OUTPUT:

bash-3.2$ php -v
PHP 7.0.17 (cli) (built: Mar 18 2017 20:13:50) ( NTS )
Copyright (c) 1997-2017 The PHP Group
Zend Engine v3.0.0, Copyright (c) 1998-2017 Zend Technologies
    with Xdebug v2.5.0, Copyright (c) 2002-2016, by Derick Rethans
    
bash-3.2$ php array_map.php 
"Hi, Mr. Green"
"Hi, ??? Black"
"Hi, ??? Page"
"-----------------"
"Hi, Mr. Green"
"Hi, Miss. Black"
"Hi, Mr. Page"

 */
