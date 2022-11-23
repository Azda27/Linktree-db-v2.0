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
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Azda</title>
</head>
<body>
    <div class="header">Azda</div>
    <br><br><br><br><br>
    <?php $data = mysqli_query($conn,"select * from link");while($d = mysqli_fetch_array($data)){?>
    
    <div class="link">
        <li><a target="_blank" href="<?php echo $d['link'];?>"><div><?php echo $d['name'];?></div></a></li>
        <br>
    </div>
    <?php }?>
    <br><br>
    <h4 class="footer"><p>&copy; Azda 2021 - 2022</p></h4>



    <a href="https://youtube.com/c/shortcode" target="_blank">
	<span></span>
	<span></span>
	<span></span>
	<span></span>
	instagram
</a>



<style>
    body {
	margin: 0;
	height: 100vh;
	display: grid;
	place-items: center;
}

a {
	width: 350px;
    height: 40px;
	text-align: center;
	position: relative;
	box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.4);
	color: white;
	text-decoration: none;
	font: 700 30px consolas;
	overflow: hidden;
    background-color:black;
}

a span:nth-child(1) {
	position: absolute;
	top: 0;
	right: 0;
	width: 100%;
	height: 3px;
	background: linear-gradient(to right, #171618, #3bff3b);
	animation: animate1 2s linear infinite;
}

@keyframes animate1 {
	0% {
		transform: translateX(-100%);
	}
	100% {
		transform: translateX(100%);
	}
}

a span:nth-child(2) {
	position: absolute;
	top: 0;
	right: 0;
	height: 100%;
	width: 3px;
	background: linear-gradient(to bottom, #171618, #3bff3b);
	animation: animate2 2s linear infinite;
	animation-delay: 1s;
}
@keyframes animate2 {
	0% {
		transform: translateY(-100%);
	}
	100% {
		transform: translateY(100%);
	}
}

a span:nth-child(3) {
	position: absolute;
	bottom: 0;
	right: 0;
	width: 100%;
	height: 3px;
	background: linear-gradient(to left, #171618, #3bff3b);
	animation: animate3 2s linear infinite;
}

@keyframes animate3 {
	0% {
		transform: translateX(100%);
	}
	100% {
		transform: translateX(-100%);
	}
}

a span:nth-child(4) {
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	width: 3px;
	background: linear-gradient(to top, #171618, #3bff3b);
	animation: animate4 2s linear infinite;
	animation-delay: 1s;
}

@keyframes animate4 {
	0% {
		transform: translateY(100%);
	}
	100% {
		transform: translateY(-100%);
	}
}

</style>
</body>