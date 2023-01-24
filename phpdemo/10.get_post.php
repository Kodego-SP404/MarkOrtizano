<?php

/* -- $_GET & $_POST Superglobals --*/
/*
We can pass data through urls and forms using the $_GET and $_POST superglobals
*/
if(isset($_POST['submit'])){
echo $_POST['name'];
echo $_POST['age'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Mark&age=30">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">name</label>
        <input type="text" name="name">
    </div>
    <br>
    <div>
        <label for="age">age</label>
        <input type="text" name="age">
    </div>
    <br><br>
    <input type="submit" name="submit" value="submit">
</form>