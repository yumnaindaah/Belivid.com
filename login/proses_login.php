<?php
session_start();
include '../koneksi.php';

if(isset($_POST['btnlogin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id_anggota, nama FROM anggota WHERE username='$username' AND password='$password'";
    $res = mysqli_query($kon, $sql);

    $count = mysqli_affected_rows($kon);

    if($count == 1){
        $data_login = mysqli_fetch_assoc($res);

        $_SESSION['id_anggota'] = $data_login['id_anggota'];
        $_SESSION['nama_lengkap'] = $data_login['nama'];

        header("Location: http://localhost/covid-19/index.php");
    }else{
        header("Location: http://localhost/covid-19/login/index.php");
    }

}
?>