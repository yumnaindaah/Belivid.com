<?php
session_start();

if(!(isset($_SESSION['id_anggota']))){

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="http://localhost/covid-19/aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/covid-19/aset/fontawesome/css/all.min.css">

    <title>COVID-19</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><i class="fas fa-shield-virus "></i>BELIVID.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="http://localhost/covid-19/index.php">HOME</a>
      <a class="nav-item nav-link" href="http://localhost/covid-19/anggota/index.php">ANGGOTA</a>
      <a class="nav-item nav-link" href="http://localhost/covid-19/cek/index.php">CEK KONDISI</a>
      <a class="nav-item nav-link" href="http://localhost/covid-19/login/logout.php">LOGOUT</a>
    </div>
  </div>
</nav>
</body>
</html>