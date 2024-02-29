<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Meghana's Project</title>
</head>
<body style="text-align: center;">

    <h1>Welcome to Meghana's Project</h1>

    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <!-- Link to Registration Page -->
        <p><a href="register_form.php">New user? Register here</a></p>

        <input type="submit" value="Login">
    </form>

</body>
</html>
