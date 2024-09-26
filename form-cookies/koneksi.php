<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "db_discord";

    $connect = new mysqli($host, $user, $pass, $dbname);

    if ($connect->connect_error) {
        die("Koneksi Gagal: " . $connect->connect_error);
    } else {
        echo "Koneksi Berhasil!";
    }
?>