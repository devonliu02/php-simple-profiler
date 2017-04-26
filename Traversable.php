<?php

require __DIR__ . '/vendor/autoload.php'; 

$array = [];
$iterator = new ArrayIterator($array);

dump($array instanceof Traversable);
dump($iterator instanceof Traversable);
