<?php

$fruits = ['apple', 'orange', 'pear'];

//get length
// echo count($fruits);

//search array
// var_dump(in_array('apple', $fruits));

//add to array
$fruits[] = 'grape';

//adding to the end of array
array_push($fruits , 'mango', 'pineapple', 'banana');

//add at the biggining
array_unshift($fruits, 'blueberry', 'strawberry');


//remove from array
array_pop($fruits); //removes from the end
array_shift($fruits); //removes from the first
// unset($fruits[2]);  //removes at a certain index

//split into chunks
$chuncked_array = array_chunk($fruits, 2);

//print_r($chuncked_array);


//print_r($fruits);


//concut arrays

$arr1 = [1,2,3,4,5];
$arr2 = [6,7,8,9,10];

$arr3 = array_merge($arr1, $arr2);

//spread
$arr4 = [...$arr1, ...$arr2];
// print_r($arr4);


// print_r($arr3);

//combine 2 arrays
$colors = ['red', 'green', 'yellow'];
$vitamin = ['avocado', 'apple', 'banana'];

$cv = array_combine($colors, $vitamin);

// print_r($cv);  //shall use first array as keys


//get array keys
$keys = array_keys($colors);
// print_r($keys);

//flip array
$flipped = array_flip($cv);
// print_r($flipped); // the previous keys are now values

//getting a range

$numbers = range(1,30);

// print_r($numbers);  //gives numbers between 1 - 30

//mapping arrays

$newNumbers = array_map(function($number) {
    return "Number {$number}";
}, $numbers);

// print_r($newNumbers);


//filter an array

$lessThan10 = array_filter($numbers, fn($number) => 
$number <=10);

// print_r($lessThan10)

//reduce

$sum = array_reduce($numbers,fn($carry, $number)=>
 $carry + $number);

 var_dump($sum);

 
?>