# rodrigodornelles/php-array-lib

[![version](https://img.shields.io/github/v/release/rodrigodornelles/php-array-lib?sort=semver&logo=packagist)](https://packagist.org/packages/rodrigodornelles/php-array-lib)
[![license](https://img.shields.io/github/license/rodrigodornelles/php-array-lib)](https://github.com/RodrigoDornelles/php-array-lib/blob/master/LICENSE) 
[![quality](https://img.shields.io/codacy/grade/5ac185bc5cb44339ac8dc2ee98e8082d?logo=codacy)](https://www.codacy.com/gh/RodrigoDornelles/php-array-lib/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=RodrigoDornelles/php-array-lib&amp;utm_campaign=Badge_Grade)
[![coverage](https://img.shields.io/codacy/coverage/5ac185bc5cb44339ac8dc2ee98e8082d?logo=codacy)](https://www.codacy.com/gh/RodrigoDornelles/php-array-lib/dashboard?utm_source=github.com&utm_medium=referral&utm_content=RodrigoDornelles/php-array-lib&utm_campaign=Badge_Coverage)
[![building](https://img.shields.io/github/checks-status/rodrigodornelles/php-array-lib/master?logo=github)](https://github.com/rodrigodornelles/php-array-lib/actions)


> simple libary for functional programing paradigm with arrays

## Features ##

 * Test driven development style _(TDD)_
 * PHP version compatibility **5.4** at **8.2**
 * Make your code cleaner and more readable
 * Adds new methods to manipulate arrays _(Inspired by **ruby**, **js** and other langs)_


## How to Use

```PHP

use ArrayCreate;                                  # if you using namespaces

$myNewArray = ArrayCreate::from($myOriginalArray) # instantiate pipeline class
  ->map(someItemFunction)                         # first function to iterate on each item
  ->map(anotherItemFunction)                      # next function to iterate on each item
  ->filter(anotherItemFunction2)                  # next function to filter on each item
  ->construct();                                  # returns new array
```

## Examples ##

### side by side comparison ###

Make an algorithm that sorts an array, removes the numbers not divisible by 3, and shows the result of each multiplied by 2 and separated by commas.

| Libary<br/>Functional | Native<br/>Functional | Structured |
| :-: | :-: | :-: |
| [![libary functional example](/images/libary-functional-min.png)](./examples/readme-functional-libary.php) | [![native functional example](/images/native-functional-min.png)](./examples/readme-functional-native.php) | [![structured example](/images/structured-min.png)](./examples/readme-structured.php)

## Installation ##

### With Composer ###

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```SHELL
$ composer require dynamikaweb/php-brazil-info "~1.0.0"
```

or add

```JSON
"rodrigodornelles/php-array-lib": "~1.0.0"
```

to the `require` section of your `composer.json` file.

### Without Composer ###

#### Step 1 ####

Download libary in <https://github.com/RodrigoDornelles/php-array-lib/releases>

#### Step 2 ####

Extract the file into your libraries folder

#### Step 3 ####

Import the main class

```PHP
<?php 

require_once __DIR__.'/path/to/my/libaries/php-array-lib/src/ArrayCreate.php';

```
