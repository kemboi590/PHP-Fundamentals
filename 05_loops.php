<?php
//for loop

// for($X=0; $X<= 10; $X++){
//     // echo 'Number ' . $X . '</br>';
//     echo "Number {$X} </br>";
// }



//While loop

// $a = 1;
//  while($a <= 15){
//     echo "Number {$a} </br>";
//     $a++;
//  }



 //while loop

//  $b = 1;
//  do{
//     echo "Number {$b} </br>";
//     $b++;
//  } while($b <=10);

//for each - for arrays

$posts = ["first posts", "second post", "third post"];

//  for($x= 0; $x < count($posts); $x++){
//     echo $posts[$x] . "</br>";
//  }

// foreach($posts as $index => $post){
//     echo $index .' - '. $post . "</br>";
// }

//key value with for each

$people = 
    [
    'first_name' => 'Brian',
    'last_name' => 'Kemboi',
    'email' => 'bkemboi590@gmail.com'
    ];

    foreach($people as $key => $value){
        echo "{$key} - {$value} </br>";
    }


?>