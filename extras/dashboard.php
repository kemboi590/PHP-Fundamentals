<?php

//http://localhost/PHP-FUNDAMENTALS/extras/dashboard.php
session_start();

if(isset($_SESSION['username'])) {
    echo '<h2> Welcome ' . $_SESSION['username'] . '</h2>';
    //logout
    echo '<a href="logout.php">Logout</a>';
} else {
    echo '<h2> Welcome guest </h2>';
    echo '<a href="/PHP-FUNDAMENTALS/13_sessions.php">Login</a>';
}

?>