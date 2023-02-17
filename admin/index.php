<?php 
require 'connection.php';
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login");
	exit;
}
$result = mysqli_query($conn, "SELECT * FROM admin");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sidebar close">
        <a href="#" class="logo-box">
            <i class='bx bx-circle-quarter'></i>
            <div class="logo-name">Azda</div>
        </a>

        <ul class="sidebar-list">
            <li>
                <div class="title">
                    <a href="index" class="link">
                        <i class='bx bx-home' ></i>
                        <span class="name">Home</span>
                    </a>
                </div>
                <div class="submenu">
                    <a href="index" class="link submenu-title">Home</a>
                </div>
            </li>
            <li>
                <div class="title">
                    <a href="data" class="link">
                        <i class='bx bx-data'></i>
                        <span class="name">Data</span>
                    </a>
                </div>
                <div class="submenu">
                    <a href="data" class="link submenu-title">Data</a>
                </div>
            </li>            <li>
                <div class="title">
                    <a href="delete" class="link">
                        <i class='bx bx-trash'></i>
                        <span class="name">Delete</span>
                    </a>
                </div>
                <div class="submenu">
                    <a href="delete" class="link submenu-title">Delete</a>
                </div>
            </li>            
            <li>
                <div class="title">
                    <a href="edit" class="link">
                        <i class='bx bx-edit'></i>
                        <span class="name">Edit</span>
                    </a>
                </div>
                <div class="submenu">
                    <a href="edit" class="link submenu-title">Edit</a>
                </div>
            </li>            
            <li>
                <div class="title">
                    <a href="input" class="link">
                        <i class='bx bx-list-plus'></i>
                        <span class="name">Input</span>
                    </a>
                </div>
                <div class="submenu">
                    <a href="input" class="link submenu-title">Input</a>
                </div>
            </li>            
            <li>
                <div class="title">
                    <a href="logout" class="link">
                        <i class='bx bx-log-out'></i>
                        <span class="name">Logout</span>
                    </a>
                </div>
                <div class="submenu">
                    <a href="logout" class="link submenu-title">Logout</a>
                </div>
            </li>
        </ul>
    </div>
    <section class="home">
        <div class="toggle-sidebar"></div>
        <h1>Welcome <?php echo $row["username"]; ?></h1>
    </section>
    <script src="assets/js/main.js"></script>
</body>

</html>