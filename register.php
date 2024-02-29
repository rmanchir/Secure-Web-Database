<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "encryption_demo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_id = $_POST['new_id'];
    $new_username = $_POST['new_username'];
    $new_password = $_POST['new_password'];
    $new_email = $_POST['new_email'];

    // Hash the password securely
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Insert data into login table, including the unhashed password in textpassword column
    $sql = "INSERT INTO login (Id, Username, Password, Email, textpassword) VALUES ('$new_id', '$new_username', '$hashed_password', '$new_email', '$new_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
