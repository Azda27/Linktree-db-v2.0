<?php
require 'connection.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dpowjpowjkp.css">
    <title>Azda</title>
</head>
<body>
    <div class="header">Azda</div>
    <br><br><br><br>
    <?php $data = mysqli_query($conn,"select * from link");while($d = mysqli_fetch_array($data)){?>
        <a target="_blank" href="<?php echo $d['link'];?>"><?php echo $d['name'];?>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        </a>
    <br><br><?php }?>
    <h4 class="footer"><p>&copy; Azda 2021 - 2022</p></h4>
</body>