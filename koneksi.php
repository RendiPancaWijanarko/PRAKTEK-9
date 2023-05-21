<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_siswa_praktek9";

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>