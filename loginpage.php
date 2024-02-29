<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "password") {
        echo "Login Successful!";
    } else {
        echo "Login Failed!";
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <br>
    <input type="submit" value="Login" name="login">
</form>

</body>
</html>