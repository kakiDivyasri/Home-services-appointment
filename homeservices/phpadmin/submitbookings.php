<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #00bcd4, #8bc34a);
            background-size: 200% 200%;
            animation: gradientAnimation 8s infinite;
            font-family: Arial, sans-serif;
            overflow: hidden; /* Hide overflow to prevent scrolling */
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .container {
            display: flex;
            flex-direction: column; /* Change to column layout */
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .success-message {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
        }

        h2 {
            font-size: 32px;
            color: #007BFF;
            margin: 10px 0;
        }

        p {
            font-size: 18px;
            margin: 20px 0;
        }

        a {
            text-decoration: none;
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #0056b3;
        }

        .emojis {
            font-size: 36px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-message">
            <h2>Your Appointment has been Booked Successfully</h2>
            <p>Thank you for using our service.</p>
            <div class="emojis">
                😄👍🌟
            </div>
        </div>
        <div class="payment-link"> <!-- Moved the payment link here -->
            <a href="pmnt.php">Proceed to Payment</a>
        </div>
    </div>
</body>
</html>

