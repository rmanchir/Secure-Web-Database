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
    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];

    // Retrieve hashed password from the database
    $sql = "SELECT Password FROM login WHERE Username='$entered_username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password_from_db = $row['Password'];

        // Verify the entered password against the hashed password from the database
        if (password_verify($entered_password, $hashed_password_from_db)) {
            // Successful login
            header("Location: welcome.php?username=" . urlencode($entered_username));
            exit();
        } else {
            // Login failed
            echo "Login failed! Try again.";
        }
    } else {
        // User not found
        echo "User not found! Try again.";
    }
}

$conn->close();
?>
