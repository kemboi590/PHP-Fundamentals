<?php

//operators in php
/*

< less than
> greater than
<= less than or equal to
>= greater than or equaL to
== equal to
=== identical to
!= not equal to
!== not identical to

*/

//control structurtes in php

//if statement

// $age = 10;

// if($age >= 20){
//     echo 'you are old enough to vote';
// }else{
//     echo 'you are still young';
// }

//if elseif

$time = date('H');

// if($time < 12){
//     echo 'Good Morning';
// } elseif($time <=16 ){
//     echo 'Good Afternoon';
// }else{
//     echo 'Good evening';
// }

$posts = ['Man hunt'];

// if(!empty($posts)){
//     echo $posts[0];
// }else{
//     echo 'No posts';
// }


//ternary a ternary should have an else
// echo !empty($posts) ? $posts[0] : 'No Posts';


//SWITCH
$weekDay = 'Thursday';

switch($weekDay){
    case 'Monday':
        echo 'Todaya is on Monday';
        break;
    case 'Tuesday':
        echo 'Todaya is on Tuesday';
        break;
    case 'Wednesday':
        echo 'Todaya is on Wednesday';
         break;
    case 'Thursday':
        echo 'Todaya is on Thursday';
         break;
    case 'Friday':
        echo 'Today is on Friday';
        break;
    default:
        echo 'Its on weekend';
    //52.40
}



?>