<?php

if(isset($_POST['submit'])){


$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS); $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$password = $_POST['password'];
//$age = filter_var(INPUT_POST, 'age', FILTER_SANITIZE_FULL_SPECIAL_CHARS);


if($username == 'mark' && $password == 'password'){
    //Set Session variable
    $_SESSION['username'] = $username;

    //Redirect user to another page
    header('location: /mark/phpdemo/extras/dashboard.php');
}else{
    echo 'Incorrect username or password';
}


echo $name;

}
?>

<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="username">username</label>
        <input type="text" name="username">
    </div>
    <br>
    <div>
        <label for="password">password</label>
        <input type="password" name="password">
    </div>
    <br><br>
    <input type="submit" name="submit" value="submit">
</form>