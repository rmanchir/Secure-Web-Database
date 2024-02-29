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
    $username = $_POST['username'];
    $job_id = $_POST['job_id'];
    $job_op_number = $_POST['job_op_number'];

    // Insert data into jobtable
    $sql = "INSERT INTO jobtable (username, jobid, jobopnum) VALUES ('$username', '$job_id', '$job_op_number')";

    if ($conn->query($sql) === TRUE) {
        echo "Job created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
