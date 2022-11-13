<<<<<<< HEAD
<?php 
include 'session.php';
$id = $_POST['id'];
$name = $_POST['name'];
$link = $_POST['link'];
mysqli_query($conn,"update link set name='$name', link='$link' where id='$id'");
header("location:data");
=======
<?php 
include 'session.php';
$id = $_POST['id'];
$name = $_POST['name'];
$link = $_POST['link'];
mysqli_query($conn,"update link set name='$name', link='$link' where id='$id'");
header("location:data");
>>>>>>> 48a9281da62ed2864d4c21a8314ea27adad79be8
?>