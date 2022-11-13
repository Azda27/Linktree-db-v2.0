<<<<<<< HEAD
<?php
require 'connection.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="LLRrFw.css">
    <title>Azda</title>
</head>
<body>
    <div class="header">Azda</div>
    <br><br><br><br><br>
    <?php $data = mysqli_query($conn,"select * from link");while($d = mysqli_fetch_array($data)){?>
    <div class="link">
        <li><a target="_blank" href="<?php echo $d['link'];?>"><div><?php echo $d['name'];?></div></a></li>
    </div>
    <?php }?>
    <br><br>
    <h4 class="footer"><p>&copy; Azda 2021 - 2022</p></h4>
</body>
<?php
require 'connection.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="LLRrFw.css">
    <title>Azda</title>
</head>
<body>
    <div class="header">Azda</div>
    <br><br><br><br><br>
    <?php $data = mysqli_query($conn,"select * from link");while($d = mysqli_fetch_array($data)){?>
    <div class="link">
        <li><a target="_blank" href="<?php echo $d['link'];?>"><div><?php echo $d['name'];?></div></a></li>
    </div>
    <?php }?>
    <br><br>
    <h4 class="footer"><p>&copy; Azda 2021 - 2022</p></h4>
</body>
>>>>>>> 48a9281da62ed2864d4c21a8314ea27adad79be8
</html>