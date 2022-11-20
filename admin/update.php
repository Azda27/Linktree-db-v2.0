<?php 
include 'session.php';
$id = $_POST['id'];
$name = $_POST['name'];
$link = $_POST['link'];
mysqli_query($conn,"update link set  id='$id', name='$name', link='$link'");
header("location:data");
?>