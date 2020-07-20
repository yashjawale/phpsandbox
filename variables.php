<?php

// Single Line Comment

# Single Line Comment

/**
 * Multiline Comment
 */

/* 
    Multiline
    Comment
*/

//echo "Hello World!";

#VARIABLES
/*
    - Prefix $
    - Start with a letter or an underscore
    - Only letters, numbers, and underscores
    - Case Sensitive
*/

#DATA TYPES
/*
    String
    Integers
    floats
    Booleans
    Arrays
    Objects
    NULL
    Resource
*/

$output = "Hello World!";
$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2;

$string1 = "Hello";
$string2 = "World";
$greeting = $string1 . ' ' . $string2 . '!';
$greeting2 = "$string1 $string2";

$string3 = "They\"re Here";

$float1 = 4.4;
$bool1 = true;

define('GREETING', 'Hello Everyone');
// echo GREETING;

// define('GREETING', 'Hello Everyone', true);
// echo greeting;

echo GREETING;

?>
<h1></h1>