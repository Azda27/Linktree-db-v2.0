  <?php
  require 'connection.php'
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
  </head>
  <body>
          <!-- Header -->
      <div class="header">Azda</div>
      <br>

      <!-- php-query -->
      <?php $data = mysqli_query($conn,"select * from link");while($d = mysqli_fetch_array($data)){?>
          
          <!-- query-result -->
      <a target="_blank" class="link" href="<?php echo $d['link'];?>"><div class="name"><?php echo $d['name'];?></div></a>
      <!-- End-php-query -->
      <?php }?>
      
      <!-- Footer -->
      <h4 class="footer"><p>&copy; Azda 2021 - 2023</p></h4>
  </body>
  </html>

  <!-- style -->
  <style>
    /* animation */
  .header {
    display: inline-block;
    margin: 0 0.5rem;
    animation: slideInDown;
    animation-duration: 1.5s;
  }
  .link {
    display: inline-block;
    margin: 0 0.5rem;
    animation: slideInLeft;
    animation-duration: 1.5s;
  }
  .name{
    display: inline-block;
    margin: 0 0.5rem;
    animation: fadeInDown;
    animation-duration: 1.5s;
  }
  .footer{
    display: inline-block;
    margin: 0 0.5rem;
    animation: slideInUp;
    animation-duration: 1.5s;
  }
  

  /* default css */
  *{
    padding: 0;
    list-style: none;
  }
  body{
    background: linear-gradient(to left , rgb(151, 255, 104), rgb(218, 146, 52), rgb(4, 62, 255));
    display: inline-block;
    margin: 0 0.5rem;
    animation: zoomIn;
    animation-duration: 1.5s;
  }
  .header{
    text-align: center;
    font-size: 42pt;
    font-family: 'Kdam Thmor Pro', sans-serif;
    color:white;
  }
  .footer{
    text-align: center;
    font-size: 14pt;
    font-family: 'Nunito', sans-serif;
  color:white;

  }
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
    color: white;
    text-decoration: none;
    font: 550 30px consolas;
    overflow: hidden;
    background-color:black;
    font-family: 'Raleway', sans-serif;
  }
  </style>

  <!-- script -->

    <!-- google analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W8DGZ3PY53"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-W8DGZ3PY53');
    </script>