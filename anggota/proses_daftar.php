<?php

include '../koneksi.php';

if(isset($_POST['save']))
{
    $nama            = $_POST['nama'];
    $tempat_lahir    = $_POST['tempat_lahir'];
    $tanggal_lahir   = $_POST['tanggal_lahir'];
    $kelamin         = $_POST['kelamin'];
    $alamat          = $_POST['alamat'];
    $telp            = $_POST['telp'];
    $username        = $_POST['username'];
    $password        = $_POST['password'];
    // $id_level        = 3;


$sql =mysqli_query($kon, "INSERT INTO anggota (nama, tempat_lahir, tanggal_lahir, kelamin, alamat, telp, username, password)
       VALUES ('$nama','$tempat_lahir','$tanggal_lahir','$kelamin','$alamat','$telp','$username','$password')");
       
       if($query>0){
        echo "
        <script>
            alert(Selamat Datang, Sahabat Baru Belivid.com :) ');
            document.location.href='index.php';
        </script>
        ";
       }

var_dump($sql);
var_dump($_POST);

    $res = mysqli_query($kon, $sql);

 $count = mysqli_affected_rows($kon);

    if($count == 1)
    {
        header("location: pendaftaran.php");

    }else{
        header("location: index.php");
    }

} else {
    header("location: index.php");

}
   

?>
