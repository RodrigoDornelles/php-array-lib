<?php

function readmeFunctionalNative()
{
    $numbers = [54, 32, 15, 3, 7, 42];

    sort($numbers);

    echo implode(', ',
        array_map(fn($n) => $n * 2,
            array_filter($numbers,
                fn($n) => !($n % 3)
            )
        )
    );
}

readmeFunctionalNative();
