<?php
session_start();

// Check if the session variable 'level' is set
$level = isset($_SESSION['level']) ? $_SESSION['level'] : 'user';

// ... (rest of your PHP code) ...

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300;400;500;600;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    transition: all .3s ease-in-out;
}
body {
    background-color:transparent; /* Set the background color to black */
    color: #000; /* Change the text color to white or any other suitable color for readability */
}
/* Add this CSS for the logo */
header .container .logo img {
    width: 200px; /* Adjust the width as needed */
    height: auto; /* Maintain the aspect ratio */
}


:root {
    --topHeader: #ecf6fe;
    --blueColor: #008aff;
    --yellowColor: #ffe824;
    --goldColor: #f7b74d;
    --headingColor: #13287e;
    --textColor: #474747;
    --whiteColor: #ffffff;
}

html {
    font-family: 'Josefin Sans', sans-serif;
    font-size: 62.5%;
    font-weight: 400;
    scroll-behavior: smooth;
}

::-webkit-scrollbar {
    width: 1.6rem;
}

::-webkit-scrollbar-track {
    background-color: var(--whiteColor);
}

::-webkit-scrollbar-thumb {
    background-color: var(--blueColor);
    border-radius: 1rem;
    border: .3rem solid var(--whiteColor);
}

ul {
    list-style: none;
}

a {
    text-decoration: none;
    display: inline-block;
}

h1,
h2,
h3 {
    text-transform: uppercase;
}

h2 {
    color: var(--headingColor);
    font-size: 3rem;
    font-weight: 400;
}

@media(min-width: 768px) {
    h2 {
        font-size: 3.3rem;
    }
}

h3 {
    font-weight: 400;
}

p {
    font-size: 1.8rem;
    font-weight: 300;
    line-height: 1.6;
    color: var(--textColor);
}

@media(min-width: 768px) {
    p {
        font-size: 2rem;
    }
}

section {
    padding: 6rem 0;
}

.btn {
    background-color: var(--yellowColor);
    color: var(--textColor);
    text-transform: uppercase;
    font-size: 1.4rem;
    padding: 1.6rem 2rem;
    border-radius: 2.1rem;
}

.btn:hover {
    box-shadow: 0 0.5rem 0.5rem -0.4rem rgba(0 0 0 / .5);
    transform: scale(1.1);
}

/Setup Our Container/
.container {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
    margin-left: auto;
    margin-right: auto;
}

/Small Screen/
@media(min-width: 576px) {
    .container {
        width: 540px;
    }
}

/Medium Screen/
@media(min-width: 768px) {
    .container {
        width: 750px;
    }
}

/Large Screen/
@media(min-width: 992px) {
    .container {
        width: 960px;
    }
}

/X-Large Screen/
@media(min-width: 1200px) {
    .container {
        width: 1170px;
    }
}

/XX-Large Screen/
@media(min-width: 1400px) {
    .container {
        width: 1320px;
    }
}

/* Start Header Section  */
header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: var(--topHeader);
    padding: 1.5rem 0;
    z-index: 1000;
}

header .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

@media(max-width: 992px) {
    header .container {
        width: 100%;
    }
}

header .container .menu-bar {
    font-size: 1.6rem;
    color: var(--headingColor);
    cursor: pointer;
}

header .container nav {
    position: absolute;
    top: -100rem;
    left: 0;
    width: 100%;
    background-color: var(--topHeader);
    padding: 1.6rem;
}

header .container nav.active {
    top: 6.9rem;
}

header .container nav ul li {
    padding-bottom: 1rem;
}

header .container nav ul li a {
    display: block;
    text-transform: capitalize;
    font-size: 1.6rem;
    color: var(--blueColor);
    padding: 1.2rem 2.6rem;
    border-radius: 2rem;
}

header .container nav ul li a.active,
header .container nav ul li a:hover {
    background-color: var(--blueColor);
    color: var(--whiteColor);
}

@media(min-width: 992px) {
    header {
        padding: 0;
    }

    header .container .menu-bar {
        display: none;
    }

    header .container nav {
        position: relative;
        left: auto;
        top: auto;
        width: auto;
        padding: 1rem 0;
    }

    header .container nav ul {
        display: flex;
        align-items: center;
        column-gap: 1rem;
    }

    header .container nav ul li {
        padding-bottom: 0;
    }
}

/* End Header Section  */
/* Start Home Section  */
.home {
    background-color: #f4faff;
    height: 100vh;
background-image: url('login.jpg'); /* Replace 'your-background-image.jpg' with the actual path to your background image */
    background-size: cover;
background-position: center;
}

.home .container {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.home .container .home-text {
    text-align: center;
}

.home .container .home-text h2 {
    font-weight: 300;
    font-size: 2.3rem;
    color: var(--blueColor);
}

.home .container .home-text h1 {
    color: var(--headingColor);
    font-size: 5.8rem;
    margin: 3rem 0;
}
.home .container .home-text p {
    font-size: 1.8rem;
    font-weight: 300;
    line-height: 1.6;
    font-family: 'Montserrat', sans-serif;    color: #000; /* Set the color you want, replace #ff0000 with the desired color code */
    max-width: 67.3rem;
    margin-bottom: 4rem;
}

.home .container .home-img {
    display: none;
}

@media(min-width: 768px) {
    .home .container {
        justify-content: flex-start;
    }

    .home .container .home-text {
        text-align: left;
    }

    .home .container .home-text h2 {
        font-size: 3.3rem;
    }

    .home .container .home-text h1 {
        font-size: 6.8rem;
    }
}

@media(min-width: 992px) {
    .home .container .home-img {
        display: flex;
    }

    .home .container .home-img img {
        height: 69.7rem;
    }
}

@media(min-width: 1024px) {
    .home {
        padding-top: 12rem;
    }
}

@media(min-width: 1200px) {
    .home {
        padding-top: 8rem;
    }
}

    </style>
    <title>Home</title>
</head>


<body>



   <header>
        <div class="container">
            <div class="logo">
                <img  src="logo4.png">
            </div>

            <i class="fas fa-bars menu-bar"></i>

            <nav>
                <ul>
                    
                    <?php
                // Show different links based on the user role
                if ($level == 'admin') {
                    echo '<li><a href="services.php">SERVICES</a></li>';
                    echo '<li><a href="bookings.php">BOOK NOW</a></li>';
                    echo '<li><a href="ratings.php">RATE & REVIEW</a></li>';
                    echo '<li><a href="about.php">ABOUT US</a></li>';
                    echo '<li><a href="help.php">HELP</a></li>';
                } elseif ($level == 'user') {
                    echo '<li><a href="servicesinfo.php">SERVICES</a></li>';
                    echo '<li><a href="bookings.php">BOOK NOW</a></li>';
                    echo '<li><a href="booking_details.php">MY BOOKINGS</a></li>';
                    echo '<li><a href="ratings.php">RATE & REVIEW</a></li>';
                    echo '<li><a href="about.php">ABOUT US</a></li>';
                    echo '<li><a href="help.php">HELP</a></li>';
                }

                // Common links for both user and admin
                echo '<li><a href="logout.php">LOGOUT</a></li>';
                ?>
            </ul>
            </nav>
        </div>
    </header>
    <section class="home" id="home">
        <div class="container">
            <div class="home-text">
                <h2>save time for your family.</h2>
                <h1>we clean for you!</h1>
                <p>At Our Home Care Services we don't just offer services; we provide a canvas for your home's story. Let us be the architects of your comfort, the artists of your ambiance, and the caretakers of your haven. Welcome to a world where your home is our masterpiece!</p>
                <a href="readmore.php" class="btn"> Click To See Offers.......</a>
            </div>
             
        </div>
    </section>
        

    

  

    
</body>

</html> 
