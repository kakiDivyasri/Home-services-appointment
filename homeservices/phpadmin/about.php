<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: poppins;
        }

        body {
            background-color:black ;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        #about-section {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 80px 12%;
        }

        .about-left img {
            width: 420px;
            height: auto;
            transform: translateY(50px);
        }

        .about-right {
            color: gold;
            width: 54%;
        }

        .about-right ul li {
            display: flex;
            align-items: center;
        }

        .about-right h1 {
            color: gold;
            font-size: 37px;
            margin-bottom: 5px;
        }

        .about-right p {
            color: #fff;
            line-height: 26px;
            font-size: 15px;
        }

        .about-right .address {
            margin: 25px 0;
        }

        .about-right .address ul li {
            margin-bottom: 5px;
        }

        .address .address-logo {
            margin-right: 15px;
            color: gold;
        }

        .address .saprater {
            margin: 0 35px;
        }

        .about-right .expertise ul {
            width: 80%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .expertise h3 {
            color: gold;
            margin-bottom: 10px;
        }

        .expertise .expertise-logo {
            font-size: 19px;
            margin-right: 10px;
            color: gold;
        }

        h2 {
            text-align: bottom;
            font-size: 19px;
            color: #110d0d;
            margin: 90px 0;
            background-color: gold;
            padding: 20px;
            border-radius: 90%;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            line-height: 40px;
            position: absolute;
            bottom: 0; /* Position the h2 at the bottom */
            width: 70%; /* Make it full-width */
        }
.about-left img {
    width: 500px; /* Adjust the width to your desired size */
    height: 300px;
    transform: translateY(50px);
}

    </style>
</head>

<body>
    <section id="about-section">
        <!-- about left  -->
        <div class="about-left">
            <img src="about.jpg" alt="About Img" />
        </div>

        <!-- about right  -->
        <div class="about-right">
            <h4>My Story</h4>
            <h1>About Us</h1>
            <p>Welcome to Home Service Appointments! We are dedicated to providing high-quality home service solutions to our valued customers. Our team of professionals is committed to making your life easier by offering a wide range of services for your home.We're not just a service provider; we're a community of professionals who care about your home as much as you do. Join us in making your home the best it can be.
            </p>

            <div class="address">
                <ul>
                    <li>
                        <span class="address-logo">
                            <i class="fas fa-paper-plane"></i>
                        </span>
                        <p>Address</p>
                        <span class="saprater">:</span>
                        <p>Ramachandrapuram, India</p>
                    </li>
                    <li>
                        <span class="address-logo">
                            <i class="fas fa-phone-alt"></i>
                        </span>
                        <p>Phone No</p>
                        <span class="saprater">:</span>
                        <p>+91 987-654-4321</p>
                    </li>
                    <li>
                        <span class="address-logo">
                            <i class="far fa-envelope"></i>
                        </span>
                        <p>Email ID</p>
                        <span class="saprater">:</span>
                        <p>Home Services@gmail.com</p>
                    </li>
                </ul>
            </div>

            <div class="expertise">
                <h3>Available On</h3>
                <ul>
                    <li>
                        <span class="expertise-logo">
                            <i class="fab fa-google"></i>
                        </span>
                        <p>Google</p>
                    </li>
                    <li>
                        <span class="expertise-logo">
                            <i class="fab fa-instagram"></i>
                        </span>
                        <p>Instagram</p>
                    </li>
                    <li>
                        <span class="expertise-logo">
                            <i class="fab fa-chrome"></i>
                        </span>
                        <p>Chrome</p>
                    </li>
                    <li>
                        <span class="expertise-logo">
                            <i class="fab fa-microsoft"></i>
                        </span>
                        <p>Microsoft Edge</p>
                    </li>
                </ul>
            </div>
        </div>
        <h2 class="flash-text" style="text-align: center;">We’re available 7 days in a week and offer 10 hours service from Morning 10:00 am to evening 8 pm.</h2>
    </section>
</body>

</html>
