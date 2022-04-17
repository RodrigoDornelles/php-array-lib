<?php 

/** works without composer */
require_once __DIR__.'/../src/ArrayCreate.php';

function readmeFunctionalLibary()
{
    $numbers = [54, 32, 15, 3, 7, 42];

    echo ArrayCreate::from($numbers)
        ->sort()
        ->filter(fn($n) => !($n % 3))
        ->map(fn($n) => $n * 2)
        ->join(', ');
}

readmeFunctionalLibary();
