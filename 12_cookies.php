<?php
//http://localhost/PHP-FUNDAMENTALS/12_cookies.php
// setcookie

setcookie('name', 'Kemboi', time() + 86400 * 30); // 30 days

// if(count($_COOKIE) > 0) {
//     echo 'There are '.count($_COOKIE). ' cookies saved <br>';
// } else {
//     echo 'There are no cookies saved <br>';
// }

if(isset($_COOKIE['name'])) {
    echo 'User '. $_COOKIE['name'] . ' is set <br>';
} else {
    echo 'User is not set';
}

//unset a cookie

//setcookie('name', 'Kemboi', time() - 86400 * 30); // 30 days



?>