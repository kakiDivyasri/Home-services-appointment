<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #222;
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('your-background-image.jpg') no-repeat center center fixed;
            background-size: cover;
            filter: brightness(50%);
            z-index: -1;
        }

        .content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .content h1 {
            font-size: 2rem;
            color: gold;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        .services {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            animation: slideIn 2s ease-in-out;
        }

        @keyframes slideIn {
            0% {
                transform: translateY(100px);
            }
            100% {
                transform: translateY(0);
            }
        }

        .service {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            color: #fff;
            width: 220px;
            margin: 10px;
        }

        .service h2 {
            font-size: 1.5rem;
            margin-top: 10px;
        }

        .service p {
            font-size: 1rem;
            margin-top: 10px;
        }

        .contact-info {
            margin-top: 0px;
            color: gold;
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="content">
        <h1>Welcome to Our Help Page</h1>
        <div class="services">
            <div class="service">
                <h2>How to Schedule a Home Cleaning Service</h2>
                <p>To schedule a home cleaning service, you can follow these steps:
                    <ol>
                        <li>Visit our website and click on the "login" button.</li>
                        <li>Select our preferred services and go to Booking.</li>
                        <li>Fill the form, date, and time that suits your schedule.</li>
                        <li>Provide your contact and address details for confirmation.</li>
                        <li>Review your booking details and make the payment.</li>
                        <li>Our team will arrive at your home on the scheduled date and time to provide the  service.</li>
                    </ol>
                </p>
            </div>
            <div class="service">
                <h2>Services We Offer</h2>
                <p>We offer a wide range of home cleaning services, including but not limited to:
                <ul>
                    <li>Carpenter</li>
                    <li>Cleaning</li>
                    <li>Electrical</li>
                    <li>Electronic</li>
                    <li>Fencing services</li>
                    <li>Home Renovation and Remodeling</li>
                    <li>Home security services</li>
                    <li>Lawn and Garden care</li>
                    <li>Plumbing</li>
                </ul>
                </p>
            </div>
            <div class="service">
                <h2>How Long Does a Typical Home Cleaning Appointment Take?</h2>
                <p>The duration of a home cleaning appointment depends on several factors, including the size and condition of your home, as well as the specific services requested. On average, a standard home cleaning may take approximately 2-4 hours to complete.</p>
            </div>
            <div class="service">
                <h2>How to Cancel or Reschedule an Appointment</h2>
                <p>If you need to cancel or reschedule your appointment, please follow these steps:
                    <ol>
                        <li>Log in to your account on our website.</li>
                        <li>Go to your scheduled appointments.</li>
                        <li>Select the appointment you want to cancel or reschedule.</li>
                        <li>Follow the on-screen instructions to make the necessary changes.</li>
                    </ol>
                </p>
            </div>
            <div class="service">
                <h2>Payment and Billing</h2>
                <p>We offer convenient payment options, including credit card, debit card, and online payment gateways. After the service is completed, you will receive an invoice via email with a breakdown of the charges. Payment is due upon completion of the service.</p>
            </div>
        </div>
        <div class="contact-info">
            <p>Contact Email: Homeservices@gmail.com</p>
        </div>
    </div>
</body>
</html>
