<?php
//echo - output strings, numbers , html etc
// echo 'Hello';
// echo 123, 'Hello' , 10.5;

//print -  can onl take one single arguement
// print 123;

//print_r - print single values of array
// print_r([1,2,3,4]);

//var_dump() - returns more info like data type and length
// var_dump('Hello world');

// var_dump(true);

// var_export() - outputs a stringrepresentation of a variable
// var_export('Hello');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> 
        <?php
        echo 'Post One';
        ?>
        <?= 'Post Two'; ?>
    </h1>
</body>
</html>





