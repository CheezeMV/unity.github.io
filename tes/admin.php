<button class="btn">Back</button>
<h1>Data Anggota UNITY</h1>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Email</th>
        <th>Fakultas</th>
        <th>Divisi</th>
    </tr>

    <?php

    include"koneksi.php";
    $no=1;
    $ambildata = mysqli_query($conn,"select * from tbl_member");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[Nama]</td>
            <td>$tampil[NIM]</td>
            <td>$tampil[Email]</td>
            <td>$tampil[Fakultas]</td>
            <td>$tampil[Divisi]</td>
        </tr> ";

        $no++;
        
    }
    ?>
</table>

<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota UNITY</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Quicksand:400,700&display=swap');
        body{
            padding: 30;
            margin:10px;
            font-family: 'Quicksand', sans-serif; ;
        }
        h1{
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 2px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border: none;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border-radius: 4px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .btn:active {
            background-color: #3e8e41;
        }
    </style>
</head>
