<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body style="text-align: center;">

    <h1>User Registration</h1>

    <form action="register.php" method="post">
        <label for="new_id">ID:</label>
        <input type="text" id="new_id" name="new_id" required><br><br>

        <label for="new_username">New Username:</label>
        <input type="text" id="new_username" name="new_username" required><br><br>

        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required><br><br>

        <label for="new_email">Email Address:</label>
        <input type="email" id="new_email" name="new_email" required><br><br>

        <input type="submit" value="Register">
    </form>

</body>
</html>
