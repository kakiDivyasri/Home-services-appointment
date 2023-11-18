<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once 'include/conn.php'; // Include your database connection code

    

      
    // Get the rating and comments from the form
    $rating = isset($_POST["rate"]) ? (int)$_POST["rate"] : 0;
    $comments = $_POST["comments"];

    // Insert the data into the database
    $sql = "INSERT INTO ratings (rating, comments) VALUES ('$rating', '$comments')";

if ($conn->query($sql) === TRUE) {
        // Redirect to the success page after successful submission
        header("Location: submitratings.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>





