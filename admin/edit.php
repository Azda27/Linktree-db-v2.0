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
</head>
<body>
	<h3>EDIT DATA</h3>
	<br/>
	<a href="data">Back</a>
	<br/>
	<br/>
		<form method="post" action="update">
			<table>
				<tr>			
					<td>id</td>
					<td>
						<input type="text" name="id" value="<?php echo $d['id']; ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="<?php echo $d['name']; ?>"></td>
				</tr>
				<tr>
					<td>Link</td>
					<td><input type="text" name="link" value="<?php echo $d['link']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Update"></td>
				</tr>		
			</table>
		</form>
		<?php } ?>
</body>