<?php
//Arrays in php are data stricturtesd that hold multiple values

$numbers = [1,2,3,4,5,6];

$fruits = array('apple', 'orange', 'pear');

// print_r($numbers);
// var_dump($numbers);
// echo $fruits[1];

//associative array
$colors = [
    1 => 'red',
    2 => 'blue',
    3 => 'green',
    4 => 'yellow'
];

// echo $colors[4];

$hex_values = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

// echo $hex_values['blue']

$person = [
    'first_name' => 'Brian',
    'last_name' => 'Kemboi',
    'email' => 'bkemboi590@gmail.com'
];

// echo $person['first_name'];
// echo $person['last_name'];
// echo $person['email'];


//dimensional arrays

$people = [
    [
    'first_name' => 'Brian',
    'last_name' => 'Kemboi',
    'email' => 'bkemboi590@gmail.com'
    ],
    [
    'first_name' => 'Karen',
    'last_name' => 'Kinya',
    'email' => 'karen@gmail.com'
    ],
    [
    'first_name' => 'Delphine',
    'last_name' => 'Nyamusi',
    'email' => 'delphine@gmail.com'
    ]
    ];

// echo $people[1] ['email'];
// echo $people[2] ['first_name'];
// echo $people[0] ['email'];

//convering to json format
var_dump(json_encode($people));

?>