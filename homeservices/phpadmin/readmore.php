<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Home Service Appointment</title>

    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
         .header {
            background-color: none; /* Change to a valid background color or image */
            color: #3b3b3b;
            text-align: center;
            padding: 0;
        }

        .header h1 {
            font-size: 50px;
        }

        

        /* Styling for the image gallery */
        /* Change this */
.image-gallery {
    display: flex;
    justify-content: center;
    /* overflow-x: auto; Remove this line */
    white-space: nowrap;
    margin: 10px 0;
}

        .image-gallery img {
            width:1500px; /* Adjust the width of each image */
            height:500px; /* Maintain the aspect ratio of the images */
            margin-right: 20px; /* Add some spacing between images */
            
        }

@keyframes flash {
    0%, 100% {
        opacity: 1; /* Fully visible */
    }
    50% {
        opacity: 0; /* Completely invisible */
    }
}


        
        /* Add this to your existing CSS */

/* Style for the bottom images section */
/* Style for the bottom images section */
/* Style for the "bottom-images" section */
/* Style for the bottom images section */
.bottom-images {
     /* Replace 'your-bottom-images-background-image.jpg' with the path to your image */
    
    text-align: center;
    white-space: nowrap;
    overflow: hidden;
    background-size: cover; /* Adjust the background size as needed */
    background-repeat: no-repeat; /* Prevent background image from repeating */
}


/* Rest of your existing styles for .image-container, .image-container::before, .image-container img, h3, and hover effects */


/* Style for the image containers within the bottom images */
.bottom-images .image-container {
    display: inline-block;
    margin: 2px; /* Adjust the margin as needed to separate the images */
    width: 30%; /* Adjust as needed to fit your layout */
    vertical-align: top;
    /* Add a border around each image */
    transition: transform 0.3s; /* Add a smooth transition effect for the images */
    position: relative; /* Add position: relative to the image container */
}

/* Style for the 50% OFF sticker */
/* Style for the "50% OFF" sticker */
.bottom-images .image-container::before {
    content: "50% OFF"; /* Text for the sticker */
    position: absolute;
    top: 10px; /* Adjust the vertical position of the sticker */
    left: 10px; /* Adjust the horizontal position of the sticker */
    background-color: #b26b23; /* Sticker background color */
    color: #fff; /* Sticker text color */
    padding: 5px; /* Add padding to the sticker */
    border-radius: 5px; /* Rounded corners for the sticker */
    font-size: 12px; /* Adjust the font size of the sticker text */
}

/* Style for individual offers for different images */
.bottom-images .image-container.house-cleaning::before {
    content: "30% OFF"; /* Custom offer for the House Cleaning image */
    background-color: #ff6600; /* Custom background color */
}

.bottom-images .image-container.electrician::before {
    content: "40% OFF"; /* Custom offer for the Electrician image */
    background-color: #ffcc00; /* Custom background color */
}

.bottom-images .image-container.balcony-cleaning::before {
    content: "25% OFF"; /* Custom offer for the Balcony Cleaning image */
    background-color: #3399ff; /* Custom background color */
}

.bottom-images .image-container img {
    width: 60%; /* Make images fill the container */
    height: 300px; /* Allow the browser to maintain the aspect ratio */
}

/* Add a hover effect to scale the images */
.bottom-images .image-container:hover {
    transform: scale(1.1);
}

/* Style for the h2 element */
.bottom-images h3 {
    font-size: 24px; /* Adjust the font size as needed */
    color: #060606; /* Text color */
    

    cursor: pointer; /* Change the cursor to a pointer when hovering over the h3 */
}

.bottom-images h3:hover {
    background-color: #b26b23; /* Change the background color on hover */
}




    </style>
</head>
<body>
   
    
    <h1 class="flash-text" style="text-align: center;">MORE SERVICES</h1>

        </div>
    </div>
    

    <!-- Remove this script block -->

    <section class="bottom-images">
        <!-- Add individual classes to each image for different offers -->
<div class="bottom-images">
    <div class="image-row">
        <div class="bottom-images">
            <div class="image-container house-cleaning">
                <img src="image11.jpeg" alt="Image 11">
                <h3>HOUSE CLEANING</h3>
            </div>
            <div class="image-container electrician">
                <img src="image12.jpeg" alt="Image 12">
                <h3>ELECTRICIAN</h3>
            </div>
            <div class="image-container balcony-cleaning">
                <img src="image13.jpeg" alt="Image 13">
                <h3>BALCONY CLEANING</h3>
            </div>
        </div>
    </div>
</div>

        </div>
        
        <div class="image-row">
            <div class="bottom-images">
                <div class="image-container">
                    <img src="image21.jpeg" alt="Image 4">
                    <h3>HOME SECURITY SERVICES</h3>
                </div>
                <div class="image-container">
                    <img src="image22.jpg" alt="Image 5">
                    <h3>HOME RENOVATION AND REMODELLING</h3>
                </div>
                <div class="image-container">
                    <img src="image23.jpeg" alt="Image 6">
                    <h3>PLUMBING</h3>
                </div>
            </div>
        </div>
        <div class="image-row">
            <div class="bottom-images">
                <div class="image-container">
                    <img src="image31.jpg" alt="Image 4">
                    <h3>CARPENTER</h3>
                </div>
                <div class="image-container">
                    <img src="image32.jpg" alt="Image 5">
                    <h3>FENCING SERVICES</h3>
                </div>
                <div class="image-container">
                    <img src="image33.jpg" alt="Image 6">
                    <h3>SEPTIC TANK SERVICES</h3>
                </div>
            </div>
        </div>
        
        </div>
    </section>
    
</body>
</html>