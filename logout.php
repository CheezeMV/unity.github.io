<?php
  //menjalankan session terlebih dahulu
  session_start();
  
  // Hapus semua session dari variabel dengan pasti
  session_unset();
  
  session_destroy();
  
  // Memuat ulang ke halaman login
  header("Location: login.php");
  exit();
?>
