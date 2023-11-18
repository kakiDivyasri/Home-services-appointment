<!DOCTYPE html>
<html lang="en">
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appointment form | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <style>

        body {
            margin: 0;
            overflow: hidden;
        }
        .logo {
            width: 200px; /* Adjust the width as needed */
            height: auto; /* Maintain aspect ratio */
        }

        section {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .login-box-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: transparent;
            border-radius: 10px;
            padding: 20px;
        }

        .login-logo a {
            color: #000; /* Set the text color to your preferred color */
        }

        .create-account-box {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-top: 10px;
        }

        .create-account-box a {
            text-decoration: none;
            color: #000;
        }
.text p {
    font-size: 20px;
}

    </style>
</head>
<body>

<section>
    <video autoplay loop muted>
        <source src="bg.mp4" type="video/mp4">
    </video>
    <div class="login-box-container">
        <div class="login-logo">
            
            <a href="home.php"><b>HOME SERVICE APPOINTMENTS</b></a>
            <hr>
        </div>
        <!-- The card body section is removed here -->
        <form action="./include/login.php" method="post">
            <div class="input-group mb-3">
                <input type="text" name='username' class="form-control" placeholder="Username" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" name='password' class="form-control" placeholder="Password" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    <?php
                    if (isset($_SESSION['error']) and !empty($_SESSION['error'])) {
                        $msg = "<div class='alert alert-danger'><strong>Fail!</strong>  " . $_SESSION['error'] . "</div>";
                        echo $msg;
                        $_SESSION['error'] = "";
                    }
                    ?>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <div class="text">
    <p>Don't have an account? <a href="createaccount.php">Create an account</a></p>
</div>

