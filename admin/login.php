<?php
require 'log-func.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="css/asdwad.css">
</head>
<body>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Admin Login</span>
                <form method="post">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your username" name="username" id="username" required>
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Enter your password" name="password" id="password" required>
                        <i class='bx bxs-lock'></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                    </div>
                    <div class="input-field button">
                        <input type="submit" name="login" value="login">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
