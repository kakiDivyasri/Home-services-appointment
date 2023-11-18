<?php
// Replace with your actual database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "homeservices";

   $conn = new mysqli($servername, $username, $password, $dbname);


// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_GET['name'];
$serviceName = $_GET['serviceName'];
$message = $_GET['Message'];
$email = $_GET['email'];
$people = $_GET['people'];
$time = $_GET['time'];
$date = $_GET['date'];
$number = $_GET['number'];

// SQL query to insert data into the bookings table
$sql = "INSERT INTO bookings (name, serviceName, message, email, people, time, date, number)
        VALUES ('$name', '$serviceName', '$message', '$email', $people, '$time', '$date', '$number')";

if ($conn->query($sql) === TRUE) {
    // Redirect to the success page after a successful submission
    header("Location: submitbookings.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
