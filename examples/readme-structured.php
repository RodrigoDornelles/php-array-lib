<?php

$numbers = [54, 32, 15, 3, 7, 42];

sort($numbers);

foreach($numbers as $key => $number)
{
	if ($number % 3) {
		continue;
	}

	echo $number * 2;

	if (array_key_last($numbers) !== $key) {
		echo ", ";
	}
}
