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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Input Data</title>
</head>
<body class="bod-log">
	<div>
	<h3>Input Data</h3>
	<br/>
	<a href="data">Data</a>
	</div>
	<div class="login-page">
        <div class="form">
            <h2>Data Input</h2>
			<br>
            <form class="login-form" method="post">
				<input type="number" name="id" placeholder="id" >
				<input type="text" name="name" placeholder="name" required>
				<input type="text" name="link" placeholder="link" required>
				<button name="submit">input</button>
            </form>
        </div>
    </div>
</body>