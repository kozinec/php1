<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$obj = new \App\OOP\SayClass();
$obj2 = new \App\OOP\Human();

//dump($obj->say());
dump($obj2->Run());

