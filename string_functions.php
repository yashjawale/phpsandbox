<?php

# substr()
# Returns a portion of a string

// $output = substr('Hello', 1, 3);
// $output = substr('Hello', -2);
// echo $output;

# strlen()
# Returns the length of a string

// $output = strlen('Hello World');
// echo $output;

# strpos()
# Finds the position of the first occurrence of a sub string

// $output = strpos('Hello World', 'o');
// echo $output;

# Finds the last occurence of a sub string

// $output = strrpos('Hello World', 'o');
// echo $output;

# trim()
# Strips whitespace

// $text = 'Hello World              ';
// // var_dump($text);

// $trimmed = trim($text);
// var_dump($trimmed);

# strtoupper
# Makes everything uppercase

// $output = strtoupper('Hello World');
// echo $output;

# strtolower
# Makes everything lowercase

// $output = strtolower('Hello World');
// echo $output;

# ucwords()
# Capitalize every word

// $output = ucwords('hello world');
// echo $output;

# str_replace
# replace all occurences of a search string with a replacement

// $text = "Hello World";
// $output = str_replace('World', 'Everyone', $text);

// echo $output;

# is_string
# Check if string

// $val = '22';
// $output = is_string($val);

// echo $output;

// $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

// foreach ($values as $value) {
//     if (is_string($value)) {
//         echo "$value is a string<br>";
//     }
// }

# gzcompress()
# Compress a string

$string = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In leo tellus, cursus 
           nec nunc ut, efficitur vestibulum purus. Donec purus felis, sollicitudin vel luctus ut, 
           consequat vel nisl. Aenean et sem sed urna ultrices laoreet. Fusce sit amet enim vitae 
           tortor volutpat hendrerit. Orci varius natoque penatibus et magnis dis parturient montes, 
           nascetur ridiculus mus. Nullam lobortis eget quam non varius. Nullam auctor diam eu dolor 
           condimentum, quis ultrices lacus bibendum. In pretium ligula ipsum, vel tincidunt ligula 
           congue quis. Quisque malesuada risus id scelerisque commodo. Orci varius natoque penatibus 
           et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis in 
           faucibus orci luctus et ultrices posuere cubilia curae; Etiam gravida orci ac rhoncus egestas. 
           Aliquam dictum consectetur augue, eget consequat ante luctus a.
           
           Phasellus varius vestibulum commodo. Nam non vehicula odio, sed gravida nunc. Sed eu mattis urna,
            eu fringilla ex. Nulla pretium placerat sapien, a dapibus nunc sodales quis. Vestibulum scelerisque 
            est et justo eleifend dapibus. Mauris ut mattis odio. Suspendisse eu finibus leo. Vestibulum 
            sagittis leo eu turpis dignissim, a tempus ipsum blandit. Vestibulum sit amet eros interdum, 
            commodo enim vel, laoreet libero. Donec elementum ex turpis, sed mattis purus egestas at. Proin 
            ut fermentum quam. In hac habitasse platea dictumst. Etiam scelerisque dolor quis lorem sodales, 
            vitae semper dolor aliquam. Cras iaculis aliquam eleifend.';

$compressed = gzcompress($string);

// echo $compressed;

$original = gzuncompress($compressed);

echo $original;

?>
<h1></h1>