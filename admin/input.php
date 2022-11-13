<<<<<<< HEAD
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
 
	<br/>
	<a href="data">Data</a>
	<br/>
	<br/>
	<h3>Input Link</h3>
	<form method="post" action="">
		<table>
			<tr>			
				<td>Id</td>
				<td><input type="text" name="id" require></td>
			</tr>
			<tr>			
				<td>Name</td>
				<td><input type="text" name="name" require></td>
			</tr>
			<tr>
				<td>Link</td>
				<td><textarea name="link" cols="22" rows="5" ></textarea></td>
				<td><p>include http / https</p></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="submit">Input</button></td>
			</tr>		
		</table>
	</form>
</body>
=======
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
 
	<br/>
	<a href="data">Data</a>
	<br/>
	<br/>
	<h3>Input Link</h3>
	<form method="post" action="">
		<table>
			<tr>			
				<td>Id</td>
				<td><input type="text" name="id" require></td>
			</tr>
			<tr>			
				<td>Name</td>
				<td><input type="text" name="name" require></td>
			</tr>
			<tr>
				<td>Link</td>
				<td><textarea name="link" cols="22" rows="5" ></textarea></td>
				<td><p>include http / https</p></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="submit">Input</button></td>
			</tr>		
		</table>
	</form>
</body>
>>>>>>> 48a9281da62ed2864d4c21a8314ea27adad79be8
</html>