<?php
include '../koneksi.php';

$sql = "SELECT * FROM anggota ORDER BY nama DESC";

$res = mysqli_query($kon,$sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)){
    $pinjam[] = $data;
}

include '../aset/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    
        <div class="container">
            <div class="row mt-4">
                <div class="col-md">   
                    <div class="card">
                        <div class="card-header">
                        <center><h5 class="card-title"></i> Anda belum menjadi anggota? Daftarkan diri anda segera!</h5></center>
                        </div>
                        <div class="card-body">
                        <center><h3><i class="fas fa-user-plus"></i><a href="pendaftaran.php" class="badge badge-light">Daftar Menjadi Anggota</a></h3></center>
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Anggota</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telepon</th>
                            </tr>
                        </thead>
                    <?php
                        $no = 1;
                        foreach ($pinjam as $p) { 
                            ?>

                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $p['nama'] ?></td>
                            <td><?= $p['tempat_lahir']?></td>
                            <td><?= $p['tanggal_lahir']?></td>
                            <td><?= $p['kelamin']?></td>
                            <td><?= $p['alamat']?></td>
                            <td><?= $p['telp']?></td>
                            <td>
                            <!-- <a href="detail.php?id_anggota=<?= $p['id_anggota'] ?>" class="badge badge-success">Detail</a> -->
                        
                            </td>
                        </tr>
                    <?php
                        $no++;
                    }
                    ?>
                    </tbody> 
                    </table>   
                </div>
            </div>
        </div>    
         
</body>
</html>
