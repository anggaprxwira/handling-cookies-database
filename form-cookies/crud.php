<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_COOKIE['discordFormData'])) {
    }
    $formData = json_decode($_COOKIE['discordFormData'], true);
    $username = $formData['username'];
    $password = $formData['password'];
    $discord_id = $formData['discord_id'];
    $price = $formData['price'];

    $sql = "INSERT INTO pesan (username, password, discord_id, price) VALUES ('$username', '$password', '$discord_id', '$price')";

    if ($connect->query($sql) === TRUE) {
        echo "Data Berhasil Diinsert!";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
} else {
    echo "Cookie not set!";
}
