<?php

/*
-strings
-Integers
-Boolean
-array
-Objects
-NULL
-Resource
*/

$name = 'Brian';  //string
$age = 41;  //int
$has_kids = true;  //bool
$cash_on_hand = 30.78;  //float

// echo $name;
// echo $age
// echo $has_kids;
// var_dump($has_kids)
// echo $cash_on_hand;

// echo $name . ' is ' . $age . ' years old';
// echo "${name} is ${age} years old"

$x = '5'*'5';
//var_dump($x);

// CONSTANTS
define('HOST', 'localhost');
define('DB_NAME', 'dev_kemboi');

echo HOST;
echo DB_NAME;


?>