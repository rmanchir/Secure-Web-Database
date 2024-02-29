<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Meghana's Project</title>
</head>
<body style="text-align: center;">

    <h1>Welcome to Meghana's Project</h1>

    <?php
    $username = $_GET['username'];
    echo "<p>Hi! $username</p>";
    ?>

    <form action="processjob.php" method="post">
        <input type="hidden" name="username" value="<?php echo htmlspecialchars($username); ?>">
        <label for="job_id">JOB ID:</label>
        <input type="text" id="job_id" name="job_id" required><br><br>

        <label for="job_op_number">JOB-OPNumber:</label>
        <input type="text" id="job_op_number" name="job_op_number" required><br><br>

        <p>Create a new job</p>
        <input type="submit" value="Submit">
    </form>

</body>
</html>
