<?php
//http://localhost/PHP-FUNDAMENTALS/13_sessions.php

session_start();

if(isset($_POST["submit"]) ) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    if($username == 'kemboi' && $password == '1234') {
        // session_start();
        $_SESSION['username'] = $username;
        header('Location: /PHP-FUNDAMENTALS/extras/dashboard.php');
    } else {
        echo 'Login failed';
    }   
}


?>

<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=John&age=22"> Click</a> -->

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<div>
    <label for="username">Username: </label>
    <input type="text" name="username">
</div>

<div>
    <label for="password">Password: </label>
    <input type="password" name="password">
</div>
<input type="submit" value="submit" name="submit">
</form>

