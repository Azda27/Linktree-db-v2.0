<?php 
include 'session.php';
$id = $_POST['id'];
$name = $_POST['name'];
$link = $_POST['link'];
mysqli_query($conn,"update link set name='$name', link='$link' where id='$id'");
header("location:data");
?>