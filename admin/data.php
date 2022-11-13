<?php 
include 'session.php';
$result = mysqli_query($conn, "SELECT * FROM admin");
  $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Data</title>
	<link rel="stylesheet" href="b6QgHL.css">
</head>
<body>
 
	<h2>Data Link</h2>
	<br/>
	<a href="input">Input link</a> 
	<a>//</a>
	<a href="logout.php">Logout</a>
	<br/><br><br>
	<h1>Welcome <?php echo $row["username"]; ?></h1>
	<br><br>
	<table>
		<tr class="top">
			<th>No</th>
			<th>Id</th>
			<th>Name</th>
			<th>Link</th>
			<th>Edit</th>
            <th>Delete</th>
		</tr>
<?php $no = 1;$data = mysqli_query($conn,"select * from link");while($d = mysqli_fetch_array($data)){?>
			<tr>
				<td class="td1"><?php echo $no++; ?></td>
				<td class="td2"><?php echo $d['id']; ?></td>
				<td class="td3"><?php echo $d['name']; ?></td>
				<td class="td4"><?php echo $d['link']; ?></td>
				<td class="td5"><a href="edit?id=<?php echo $d['id']; ?>"><div class="edit"><i class="bx bx-edit"></div></i></a></td>
				<td class="td6"><a href="delete?id=<?php echo $d['id']; ?>"><div class="delete"><i class="bx bx-trash"></div></i></a></td>
			</tr>
<?php } ?>
	</table>
</body>
</html>