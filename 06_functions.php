<?php

function registerUser($name){  //pass arguement
    echo "{$name} registered";
}

// registerUser("Kemboi");  //expect a parameter




function sum($num1, $num2){
    return $num1 + $num2;
}

$answer = sum(5, 4);
// echo $answer;


//annonymous function- set to a variable
$substract = function($n1, $n2){
    return $n1 - $n2;
};
// echo $substract(18,4);

//arrow function

$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(5,5);


?>