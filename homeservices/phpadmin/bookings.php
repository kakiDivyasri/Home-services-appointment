<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap');

        * {
            margin: 0;
            padding: 0;
        }
/* Add this CSS rule to change the placeholder text color to white */
input::placeholder,
select::placeholder {
    color: white;
}

/* Remove background color of input fields after filling them */
input:focus {
    background-color: none;
}


        .main_bg {
            background-color:#000;
            max-width: 1280px;
            height: 800px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
        }

        .form {
            width: 650px;
        }

        .form-text {

            text-align: center;
            margin: 0 0 40px 0;
        }

        .form-text h1 span img {
            margin: 0 10px;
        }

        .form-text h1 {
            color: #fff;
            font-family: 'Akaya Telivigala', cursive;
            font-size: 50px;
            margin-bottom: 20px;
        }

        .form-text p {
            color: #fff;
            font-family: 'Akaya Telivigala', cursive;
            font-size: xx-large;
        }

        .main-form div {
            margin: 10px 10px;
            width: 300px;
            color: #fff;
            display: inline-block;
        }

        .main-form div input {
    width: 100%;
    font-family: 'Akaya Telivigala', cursive;
    background: none;
    border: 1px solid #ffca00;
    font-size: 20px;
    color: #fff; /* Add this line to set the text color to white */
    outline: none;
    padding: 3px 0 3px 10px;
    margin-top: 10px;
}


        .main-form div select {
    width: 104%;
    font-family: 'Akaya Telivigala', cursive;
    background: none; /* Check background color here */
    border: 1px solid #ffca00;
    font-size: 20px;
    color: #fff; /* Check text color here */
    outline: none;
    padding: 3px 0 3px 10px;
    margin-top: 10px;
}
.main-form div select option {
    color: black; /* Set the text color to black for the dropdown options */
}


        .main-form div span {
            width: 100%;
            font-family: 'Akaya Telivigala', cursive;
            color: #fff;
            font-size: 25px;
        }

        #submit {
            width: 100%;
            text-align: center;
        }

        #submit input {
            font-family: 'Akaya Telivigala', cursive;
            width: 200px;
            background-color: yellow !important;
            color:black !important;
            transition: all .3s;
        }

        #submit input:hover {
            font-family: 'Akaya Telivigala', cursive;
            width: 200px;
            background-color: #fff !important;
            color: #fff !important;
        }

        #submit input:active {
            font-size: 19px;
            background-color: rgb(46, 20, 5) !important;
            color: #fff !important;
        }
/* Styling the date picker arrow button */
#date::-webkit-calendar-picker-indicator {
    filter: invert(1); /* Inverts the colors (white to black) */
}

#date::-webkit-inner-spin-button {
    filter: invert(1); /* Inverts the colors (white to black) */
}

#date::-webkit-clear-button {
    filter: invert(1); /* Inverts the colors (white to black) */
}

        @media screen and (max-width: 710px) {
            .main-form {
                text-align: center;
            }
        }
    </style>
    <title>Booking form</title>
</head>

<body class="main_bg">
    <div class="form">
        <div class="form-text">
            <h1><span><img src="art-1.png" alt=""></span>Book Now <span><img src="art-1.png" alt=""></span></h1>
            <p>Thank you for choosing our services.To book your reservation,please provide the following information.</p>
        </div>
        <div class="main-form">
            <form action="insertbookings.php" method="get">
                
                
                    <div>
                    <label for="name">Your full name?</label>
                    <input type="text" name="name" id="name" placeholder="Write your name here..." required>
                </div>
                <div>
                    <label for="ServiceName">Your Service name?</label>
                    <select name="serviceName" id="serviceName" required>
                        <option value="">Select the service name</option>
                        <?php
                        // Connect to your database (Replace with your actual database connection details)
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "homeservices";

                        $conn = new mysqli($servername, $username, $password, $dbname); 
                        // Check the connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // Fetch service names from the service table
                        $sql = "SELECT serviceName FROM services";
                        $result = $conn->query($sql);

                        // Populate the select options
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row["serviceName"] . "'>" . $row["serviceName"] . "</option>";
                            }
                        }

                        // Close the database connection
                        $conn->close();
                        ?>
                    </select>
                </div>
                <div>
                    <label for="Message">Your Message?</label>
                    <input type="text" name="Message" id="Message" placeholder="Write your Message here..." required>
                </div>
                <div>
                    <label for="email">Your email address?</label>
                    <input type="email" name="email" id="email" placeholder="Write your email here..." required>
                </div>
                <div>
                    <label for="people">How many people?</label>

                    <select name="people" id="people"  required>
                        <option value="">Select the number of people </option>
                        <option value="1">1 People</option>
                        <option value="2">2 People</option>
                        <option value="3">3 People</option>
                        <option value="4">4 People</option>
                    </select>
                </div>
                <div>
                    <label for="time">What time?</label>
                    <input type="text" name="time" id="time" placeholder="Time" required>
                </div>
                <div>
                    <label for="date">What is the date?</label>
                    <input type="date" name="date" id="date" required>
                </div>
                <div>
                    <label for="number">Your phone number?</label>
                    <input type="tel" name="number" id="number" placeholder="Write your number here..." required>
                </div>
                <div id="submit">
                    <input type="submit" value="SUBMIT" id="submit-btn">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
