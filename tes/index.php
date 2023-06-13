<?php
  session_start();
  
  // Memeriksa apakah user telah berhasil login, redirect ke login jika tidak
  if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
  }
  
  // Melakukan upload file
  if (isset($_POST['upload'])) {
    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    
    // Memindahkan uploaded file ke direktori uploads
    if (move_uploaded_file($fileTmpName, "uploads/" . $fileName)) {
        echo "File uploaded successfully!";
      } else {
        echo "File upload failed!";
      }
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>File Upload</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="konten">
<section class="card" >
  <h1 >Welcome, <?php echo $_SESSION['username']; ?>!</h1>
  
  <h2 >File Upload</h2>
  <form action="index.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="upload">Upload</button>
  </form>
  
  <a href="logout.php">Logout</a>
  </section>
    </div>
</body>
</html>
