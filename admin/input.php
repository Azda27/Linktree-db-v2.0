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
	if( tambah($_POST) > 0 ) {
	echo header("Location: data");
} else {
	echo header("Location: data");
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input</title>
	<style>textarea{resize: none;}</style>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div>
	<h3>Input Link</h3>
	<br/>
	<a href="data">Data</a>
	</div>
	<div class="login-page">
        <div class="form">
            <h2>Data Input</h2>
			<br>
            <form class="login-form" method="post">
				<input type="number" name="id" placeholder="id" required>
				<input type="text" name="name" placeholder="name" required>
				<input type="text" name="link" placeholder="link" required>
				<button name="submit">input</button>
            </form>
        </div>
    </div>
</body>