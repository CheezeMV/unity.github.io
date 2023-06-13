<?php
require'koneksi.php';
$Nama = $_POST["Nama"];
$NIM = $_POST["NIM"]; 
$Email = $_POST["Email"];
$Fakultas = $_POST["Fakultas"];
$Divisi = $_POST["Divisi"];   

$query_sql = "INSERT INTO tbl_member (Nama,NIM,Email,Fakultas,Divisi)
              VALUES ('$Nama','$NIM','$Email','$Fakultas','$Divisi')";

if (mysqli_query($conn,$query_sql)){
    header("Location:login.html");
} else{
    echo"Pendaftaran gagal : " . mysqli_error($conn);
}