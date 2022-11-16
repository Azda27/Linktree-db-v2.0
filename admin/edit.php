<?php
	include 'session.php';
	$id = $_GET['id'];
	$data = mysqli_query($conn,"select * from link where id='$id'");
	while($d = mysqli_fetch_array($data)){
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit data</title>
	<style>textarea{resize: none;}</style>
</head>
<body>
	<h3>EDIT DATA</h3>
	<br/>
	<a href="data">Back</a>
	<br/>
	<br/>
		<form method="post" action="update">
		<div class="id">
			<span>Id</span>
			<br>
			<input type="text" name="id" value="<?php echo $d['id']; ?>" require readonly>
		</div>
		<div class="name">
			<span>Name</span>
			<br>
			<input type="text" name="name"  value="<?php echo $d['name']; ?>" require>
		</div>
		<div class="link">
			<span>Link</span>
			<br>
			<input name="link" type="text"value="<?php echo $d['link']; ?>">
			<br>
			<span>include http / https</span>
		</div>
		<br>
		<div class="submit">
			<button type="submit" name="submit">Update</button>
		</div>
	</form>
		<?php } ?>
</body>