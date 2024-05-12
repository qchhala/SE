<?php
    // Database configuration
    $servername = "mysql-service";
    $username = "user";
    $password = "secret";
    $dbname = "db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create table if not exists
    $sql = "CREATE TABLE IF NOT EXISTS statistics_survey (
                id INT AUTO_INCREMENT PRIMARY KEY,
                age INT NOT NULL,
                gender VARCHAR(255) NOT NULL,
                occupation VARCHAR(255) NOT NULL,
                social_status VARCHAR(255) NOT NULL
            )";
    $conn->query($sql);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $occupation = $_POST['occupation'];
        $socialStatus = $_POST['socialStatus'];

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO statistics_survey (age, gender, occupation, social_status) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $age, $gender, $occupation, $socialStatus);

        // Execute the statement
        $stmt->execute();

        // Close the statement and connection
        $stmt->close();
        $conn->close();

        header('Location: submited.php');
    }
?>
