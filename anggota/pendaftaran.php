<?php

include '../koneksi.php';

include '../aset/header.php';

$query = mysqli_query($kon, "SELECT * FROM nama");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pendaftaran Anggota</title>
</head>
<body>
<div class="container">
    <div class="row mt-4">
      <div class="col-md">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title"><i class="fas fa-user-plus"></i> Pendafataran Anggota </h2>
    

    <form action="proses_daftar.php"method="post">
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" name="nama" placeholder="Nama" required>
    </div>
    <div class="form-group">
      <label for="tempat_lahir">Tempat Lahir</label>
      <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required>
    </div>
    <div class="form-group">
      <label for="tanggal_lahir">Tanggal Lahir</label>
      <input type="date" class="form-control" name="tanggal_lahir" placeholder="Telepon"required>
    </div>
    <div class="form-group">
      <label for="kelamin">Jenis Kelamin</label>
      <input type="text" class="form-control" name="kelamin" placeholder="Jenis kelamin" required>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
    </div>
    <div class="form-group">
      <label for="telp">Telepon</label>
      <input type="number" class="form-control" name="telp" placeholder="Telepon" required>
    </div>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" name="username" placeholder="Username" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password" required>
    </div>
  <center><button type="submit" name="save" class="btn btn-primary" >Daftar</button></center>

</form>
        </div>
      </div>
    </div>
  </div>
</div>  


</body>
</html>

<?php
include '../aset/footer.php';
?>