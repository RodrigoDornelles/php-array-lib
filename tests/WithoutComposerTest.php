<?php 

assert_options(ASSERT_BAIL, true);
require_once __DIR__.'/../vendor/autoload.php';

/** 
 * test 1
 */
$array = ['FOO', 'BAR', 'Z'];
assert(ArrayCreate::from($array)->join(',') == 'FOO,BAR,Z');

/** test 2 */
$string = "0,1,2,3,5";
$array = explode(",", $string);
$array = ArrayCreate::from($array)->map(function($n) {return (int) $n;})->construct();
assert(array_filter($array, 'is_int'));

/** test 3 */
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9 ,10];
$array = ArrayCreate::from($array)->filter(function($n) {return $n % 2;})->construct();
assert(count($array) == 5);

/** test 4 */
$array = ['first', 'middle', 'last'];
$array = ArrayCreate::from($array);
assert($array->first() == 'first');
assert($array->last() == 'last');

/** test 5 */
$array = ['first', 'middle', 'last'];
$array = ArrayCreate::from($array)->flip()->construct();
assert($array['first'] == 0);
assert($array['last'] == 2);

print("done.\n");
