<?php

spl_autoload_register(function($class){
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    include $path;
    }
);

use animals\Animals;
use animals\cats\Cats;

$animal = new Animals();
$cat = new Cats();

$animal->animalType();
$cat->catName();
