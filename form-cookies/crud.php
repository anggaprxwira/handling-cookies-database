<?php 
    include 'koneksi.php';

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $discord_id = $_POST['discord_id'];
        $price = $_POST['price'];

        $sql = "INSERT INTO pesan (username, password, discord_id, price) VALUES ('$username', '$password', '$discord_id', '$price')";

        if ($connect->query($sql) === TRUE) {
            echo "Data Berhasil Diinsert!";
        } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
    }
?>