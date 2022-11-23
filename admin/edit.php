<?php
	include 'session.php';
	$id = $_GET['id'];
	$data = mysqli_query($conn,"select * from link where id='$id'");
	while($d = mysqli_fetch_array($data)){
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Edit Data</title>
</head>
<body class="bod-log">
	<div>
	<h3>Edit Data</h3>
	<br/>
	<a href="data">Data</a>
	</div>
	<div class="login-page">
        <div class="form">
            <h2>Data Edit</h2>
			<br>
            <form class="login-form" method="post" action="update.php">
				<input type="number" name="id" placeholder="id" value="<?php echo $d['id']; ?>" >
				<input type="text" name="name" placeholder="name" value="<?php echo $d['name']; ?>" required>
				<input type="text" name="link" placeholder="link" value="<?php echo $d['link']; ?>" required>
				<button name="submit">update</button>
            </form>
        </div>
    </div>
</body>
<?php }?>