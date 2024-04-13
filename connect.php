<?php
// Replace these values with your MySQL database credentials
$host = "localhost";
$user = "root";
$password = ""; // Empty password since you're using localhost
$database = "registration"; // Specify the database name here

// Connect to the MySQL server with the specified database name
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the database to find the current maximum number
$query = "SELECT MAX(CAST(SUBSTRING(id, 7) AS UNSIGNED)) AS max_number FROM ace WHERE SUBSTRING(id, 1, 6) = 'ACEA23'"; // Updated query
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $max_number = (int)$row["max_number"];
    $next_number = $max_number + 1;

    // Generate the unique ID with the incremented number
    $unique_id = "ACEB23" . str_pad($next_number, 4, "0", STR_PAD_LEFT); // Updated format

    // Get user information from the form
    $name = $_POST['name'];
    $phone_number = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $branch = $_POST['department'];
    $interests = isset($_POST['interests']) ? implode(', ', $_POST['interests']) : '';
    $goodies=$_POST['goodies'];


    // Insert user information and the generated ID into the database
    $insert_query = "INSERT INTO ace (id, name, phone_number, email, gender, department, interests,goodies) VALUES ('$unique_id', '$name', '$phone_number', '$email', '$gender', '$branch', '$interests','$goodies)";
    
    if ($conn->query($insert_query) === TRUE) {
        echo "User information with unique ID ($unique_id) inserted successfully into the database.<br>";
    } else {
        echo "Error: " . $insert_query . "<br>" . $conn->error;
    }
} else {
    // If no records found, start from 0001
    $unique_id = "ACEA23001"; // Updated initial value
    
    // Get user information from the form
    $name = $_POST['name'];
    $phone_number = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $branch = $_POST['department'];
    $interests = isset($_POST['interests']) ? implode(', ', $_POST['interests']) : '';
    $goodies=$_POST['goodies'];


    // Insert user information and the generated ID into the database
    $insert_query = "INSERT INTO ace (id, name, phone_number, email, gender, department, interests,goodies) VALUES ('$unique_id', '$name', '$phone_number', '$email', '$gender', '$branch', '$interests','$goodies)";
    
    if ($conn->query($insert_query) === TRUE) {
        echo "User information with unique ID ($unique_id) inserted successfully into the database.<br>";
    } else {
        echo "Error: " . $insert_query . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>