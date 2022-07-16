<?php 
$servername = "localhost";
$database = "isci";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} 
?>