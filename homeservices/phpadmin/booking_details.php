<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid #ddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    th {
        background-color: #333;
        color: white;
    }
</style>

    <title>My Bookings</title>
</head>

<body>
    <h1>My Bookings</h1>

    <?php
    // Replace with your actual database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "homeservices";

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch all bookings from the database
    $sql = "SELECT * FROM bookings";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display bookings in a table
        echo "<table>";
        echo "<tr><th>Booking ID</th><th> Name</th><th>Service Name</th><th>Message</th><th>Email</th><th>People</th><th>Time</th><th>Date</th><th>Number</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["serviceName"] . "</td>";
            echo "<td>" . $row["Message"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["people"] . "</td>";
            echo "<td>" . $row["time"] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
            echo "<td>" . $row["number"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "You have no bookings yet.";
    }

    // Close the database connection
    $conn->close();
    ?>

</body>

</html>
