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
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
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
    <title>Azda</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />    <title>Azda</title>
  </head>
  <body class="container light-mode">
    <div class="container">
        <div id="mode-toggle"><span class="material-symbols-outlined">dark_mode</span></div>
        <h1 class="header">Azda</h1>
        <div class="linktree">
            <a href="#">Link 1</a>
        </div>
        <h6 class="footer">&copy; Azda 2021 - 2023</h6>
    </div>
  </body>
</html>
<script src="script.js"></script>
    <style>
        *{
          padding: 0;
          margin: 0;
        }
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .light-mode {
          background: linear-gradient(to left, rgb(255, 123, 0), rgb(54, 11, 245), rgb(61, 197, 34));
            color: #000;
        }

        .dark-mode {
            background: linear-gradient(to left, rgb(255, 123, 0), rgb(54, 11, 245), rgb(61, 197, 34), rgb(255, 0, 64));
            color: #fff;
        }

        .linktree {
            display: flex;
            flex-wrap: wrap;
            margin: 20px 0;
        }

        .linktree a {
            display: block;
            width: 25%;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            color: inherit;
        }

        .linktree a:hover {
            background-color: #f2f2f2;
            color: #000;
        }

        .dark-mode .linktree a:hover {
            background-color: #000;
            color: #fff;
        }
    </style>