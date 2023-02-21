<?php
//   require 'connection.php'
  ?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&family=Nunito:ital@1&family=Poppins&family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="styla.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Azda</title>
 </head>
<body>
	<div class="container light-mode">
		<div class="header">My Linktree</div>
		<div class="linktree">
			<a href="#">Link 1</a>
			<a href="#">Link 2</a>
			<a href="#">Link 3</a>
			<a href="#">Link 4</a>
			<a href="#">Link 5</a>
			<a href="#">Link 6</a>
			<a href="#">Link 7</a>
			<a href="#">Link 8</a>
			<a href="#">Link 9</a>
		</div>
        <button id="mode-toggle"><i id="mode-icon" class="bx bx-moon"></i></button>
		<div class="footer">© 2023 Linktree Inc.</div>
	</div>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>
<style>
*{
	padding: 0;
	list-style: none;
}
body {
	font-family: sans-serif;
}
.header{
	text-align: center;
	font-size: 42pt;
	font-family: 'Kdam Thmor Pro', sans-serif;
	color: white; 
}

.linktree a{
	width: 350px;
	height: 40px;
	border: solid 3px;
	margin-right: auto;
	margin-left: auto;
	display: block;
	font-size: 20pt;
	text-decoration:none;
	color: black;
	border-radius: 8px;
	text-align: center;
	font-family: 'Raleway', sans-serif;
	color: inherit;
}
.linktree a:hover {
	background-color: #f2f2f2;
	color: #000;
}
.container{
	margin: auto;
	width: 100%;
	margin-right: 40%;
}
.footer{
	text-align: center;
	font-size: 14pt;
	font-family: 'Nunito', sans-serif;
	color: white;
}
.material-icons-outlined{
	background-color: #000;
	border-radius: 100%;
	border: none;
	color: white;
	text-align: center;
	text-decoration: none;
	font-size: 16pt;
	float: left;
	margin-left: 30px;
}

/* Light-mode */

.light-mode {
	background-color: white;
	color: #000;
}
.light-mode .header,
.light-mode .footer{
	color: #000;
}
.light-mode .material-icons-outlined{
	background-color: #000;
	color: #fff;
}
		
/* Dark-mode */

.dark-mode .linktree a:hover {
	background-color: #000;
	color: #000;
}
.dark-mode {
	background-color: black;
	color: #fff;
}
.dark-mode .material-icons-outlined{
	background-color: #000;
	color: #000;
}
#mode-toggle {
  background-color: transparent;
  border: none;
  cursor: pointer;
  outline: none;
}

#mode-icon {
  font-size: 1.5rem;
  color: #f1c40f;
}

.dark-mode #mode-icon {
  color: #f5f6fa;
}

</style>