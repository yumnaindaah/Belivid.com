<?php
$kon = mysqli_connect("localhost", "root", "", "covid-19");

if(mysqli_connect_error()){
    echo "Koneksi database gagal : ".mysqli_connect_error();
}
?>