<?php

//http://localhost/PHP-FUNDAMENTALS/10_get_post.php
if(isset($_POST["submit"]) ) {
    echo $_POST['name']; 
    echo $_POST['age'];
}


?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<div>
    <label for="name">Name: </label>
    <input type="text" name="name">
</div>

<div>
    <label for="age">Age: </label>
    <input type="text" name="age">
</div>
<input type="submit" value="submit" name="submit">
</form>