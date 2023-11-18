<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow: hidden; /* Hide overflow to prevent scrolling */
        }

        #background-video {
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1; /* Place the video behind the content */
        }

        .container {
        margin:30px;
            display: flex;
            flex-direction: column; /* Change to vertical layout */
            justify-content: center; /* Align to the top */
            align-items: center;
            height: 100vh;
        }

        .success-message {
width:50%;
            background-color: rgba(255, 255, 255, 0.8); /* Add background opacity */
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
            background-color: #000;
        }

        h2 {
            font-size: 40px;
            color: gold;
            margin: 10px 0;
        }

        p {
            font-size: 30px;
            margin: 20px 0;
            color: #fff;
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
    <video id="background-video" autoplay muted loop>
        <source src="background2.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="container">
        <div class="success-message">
            <h2>Thank you for Rating!</h2>
            <p>Your Rating has been successfully submitted.</p>
            <div class="emojis">
                😄👍🌟
            </div>
        </div>
    </div>
</body>
</html>

