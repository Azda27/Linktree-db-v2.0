<<<<<<< HEAD
<?php
require '../connection.php';
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login");
	exit;
}
=======
<?php
require '../connection.php';
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login");
	exit;
}
>>>>>>> 48a9281da62ed2864d4c21a8314ea27adad79be8
?>