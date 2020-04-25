<?php
include '../koneksi.php';
include '../aset/header.php';

$sql = "SELECT * FROM anggota ORDER BY nama DESC";

$res = mysqli_query($kon,$sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)){
    $pinjam[] = $data;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEK KONDISI</title>
</head>
<body>
    <div class="p-5 text-center"><h2>Periksa Kondisi Anda </h2></div>
    <div><div class="p-3 mx-3">
        <div class="card shadow p-5">
            <div class="text-center"><img src="health.png" style="height: 150px;"></div>
            <section><h4 class="py-3 text-center">Ketahui kondisi anda sekarang dengan menjawab beberapa pertanyaan <br></h4>
            <div a href="pertanyaan.php?id_pertanyaa=<?= $p['id_pertanyaan'] ?>"class="large text-center"><button class="btn btn-primary"  >Cek Kondisi Anda Sekarang</button><br><br>atau<br><br><a href="http://localhost/covid-19/index.php" class="button info">Kembali ke Beranda</a></div>
            </section>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include '../aset/footer.php';
?>