<?php

require __DIR__ . '/vendor/autoload.php';

function test(array $arr)
{
    $res = true;
    array_map(function ($v) use (&$res) {
        $res = $res && $v;
    }, $arr);

    dump($res);
}

$oneFalse = [true, false, true];
test($oneFalse);

$allFalse = [false, false, false];
test($allFalse);

$true = [true, true, true];
test($true);

/*
OUTPUT:

bash-3.2$ php -v
PHP 7.0.17 (cli) (built: Mar 18 2017 20:13:50) ( NTS )
Copyright (c) 1997-2017 The PHP Group
Zend Engine v3.0.0, Copyright (c) 1998-2017 Zend Technologies
    with Xdebug v2.5.0, Copyright (c) 2002-2016, by Derick Rethans

bash-3.2$ php closure_with_use_ref.php
false
false
true
*/
