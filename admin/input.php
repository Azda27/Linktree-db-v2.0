<?php 
include 'session.php';
function tambah($data) {
	global $conn;
	$id = htmlspecialchars($data["id"]);
	$name = htmlspecialchars($data["name"]);
	$link = htmlspecialchars($data["link"]);
	$query = "INSERT INTO link VALUES('$id','$name', '$link')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
?>
<?php 
if( isset($_POST["submit"]) ) {
	if( tambah($_POST) > 11 ) {
	echo header("Location: data");
} else {
	echo header("Location: data");
}
}
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

		<div class="form">
            <h2>Data Input</h2>
			<br>
            <form class="login-form" method="post">
				<input type="number" name="id" placeholder="id" require>
				<input type="text" name="name" placeholder="name" require>
				<input type="text" name="link" placeholder="link" require>
				<button name="submit">input</button>
            </form>
        </div>
    </section>
    <script src="assets/js/main.js"></script>
</body>

</html>