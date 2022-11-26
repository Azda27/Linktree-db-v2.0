<?php 
require '../connection.php';
session_start();
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];
	$result = mysqli_query($conn, "SELECT username FROM admin WHERE id = $id");
	$row = mysqli_fetch_assoc($result);
	if( $key === hash('sha256', $row['username']) ) {
		$_SESSION['login'] = true;
	}
}
if( isset($_SESSION["login"]) ) {
	header("Location: index");
	exit;
}
if( isset($_POST["login"]) ) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");
	if( mysqli_num_rows($result) === 1 ) {
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			$_SESSION["login"] = true;
			if( isset($_POST['remember']) ) {
				setcookie('id', $row['id'], time()+60);
				setcookie('key', hash('sha256', $row['username']), time()+60);
			}
			header("Location: index");
			exit;
		}
	}
	$error = true;
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
<body class="bod-log">
    <div class="login-page">
        <div class="form">
            <h2>Admin Login</h2>
            <br>
            <form class="login-form" method="post">
            <input type="text" name="username" placeholder="username"/>
            <input type="password" name="password" placeholder="password"/>
            <button name="login">login</button>
            </form>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
