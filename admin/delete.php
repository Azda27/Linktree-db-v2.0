<?php 
require 'session.php';

$id = $_GET["id"];
if( hapus($id) > 0 ) {
	echo "<p>Data has been deleted</p>";
	echo header("Location: data.php", true, 303);
}
function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM link WHERE id = $id");
	return mysqli_affected_rows($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<a href="data">back</a>
</body>
</html>