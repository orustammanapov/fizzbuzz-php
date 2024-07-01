<?php

namespace App;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/FizzBuzz.php';

$numbers = range(FizzBuzz::MIN, FizzBuzz::MAX);

foreach ($numbers as $number) {
    echo FizzBuzz::from($number) . \PHP_EOL;
}