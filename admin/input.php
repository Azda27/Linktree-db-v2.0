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
</head>
<body>
	<h3>Input Link</h3>
	<br/>
	<a href="data">Data</a>
	<br/>
	<br/>

	<form method="post" action="">
		<div class="id">
			<span>Id</span>
			<br>
			<input type="text" name="id" require>
		</div>
		<div class="name">
			<span>Name</span>
			<br>
			<input type="text" name="name" require>
		</div>
		<div class="link">
			<span>Link</span>
			<br>
			<textarea name="link"rows="4" cols="22.5"></textarea>
			<br>
			<span>include http / https</span>
		</div>
		<br>
		<div class="submit">
			<button type="submit" name="submit">Input</button>
		</div>
	</form>
</body>