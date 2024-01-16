<?php
//string functions
//http://localhost/PHP-FUNDAMENTALS/08_string_functions.php

$string = 'Hello world';
//length of a string
// echo strlen($string);



//find the position of the first occurrance os a substring
// echo strpos($string, 'o');



//find the position of the last occurrance os a substring
// echo strrpos($string, 'o');



//reverse a string
// echo strrev($string);



//convert to lowercase
// echo strtolower($string);



//convert to uppercase
// echo strtoupper($string);



//uppercase the first character of each word
// echo ucwords($string);



//replace a substring
// echo str_replace('world', 'everyone', $string);




//return a portion of a string specified by the offset and length
// echo substr($string, 0, 5);  //hello
// echo substr($string, 5); //world



//starts with...
// if(str_starts_with($string, 'Hello')){
//     echo 'YES';
// }else{
//     echo 'NO';
// }




//Eands with...
// if(str_ends_with($string, 'ld')){
//     echo 'YES';
// }else{
//     echo 'NO';
// }

//HTML Special char

// $string2 = '<script>alert(1)</script>';
// echo htmlspecialchars($string2);

// printf('%s likes to %s', 'Kemboi', 'code');

// printf('1+1= %d', 1+1);

printf('1+1= %f', 1+1);
//1:24
?>