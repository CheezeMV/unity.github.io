<?php
require 'koneksi.php';
$Email = $_POST["Email"];
$NIM = $_POST["NIM"];

$query_sql = "SELECT * FROM tbl_member
              WHERE Email = '$Email' AND NIM = '$NIM'";

$result = mysqli_query($conn, $query_sql);

if(mysqli_num_rows($result) > 0){
    header("Location:");
} else {
    echo "<center><h1>Email atau NIM Anda salah. Silahkan coba lagi</h1>
    <button><strong><a href='login.html'>Login</a></strong></button></center>";
}