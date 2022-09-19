<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="sidebar">

        <!-- logo app -->
        <div class="app">
            <div class="logo"></div>
            <h2>STARBHAK SARPRAS</h2>
        </div>

        <!-- menu sidebar -->
        <ul>
            <li><a href="table_siswa.php">Data Siswa</a></li>
            <li><a href="table_barang.php">Data Barang</a></li>
        </ul>
    </div>

    <div class="content">
        <h2>UJI LEVEL TINGKAT XI</h2>
        <button class="btn"><a href="form_siswa.html">Tambah</a></button>
        <div class="table">
            <table border="1px">
                <tr>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Kelas & Jurusan</th>
                    <th>Telepon</th>
                </tr>
                <?php
                    $sql = "SELECT * from tbsiswa";
                    $query = mysqli_query($connect, $sql);

                    while ($sarpras = mysqli_fetch_array($query)) {
                    echo"
                    <tr>
                    <td>$sarpras[nisn]</td>
                    <td>$sarpras[nama]</td>
                    <td>$sarpras[kelas&jurusan]</td>
                    <td>$sarpras[telepon]</td>
                    <td>
                        <a href='form_editsiswa.php?no_sewa=".$sarpras['nisn']."'>Edit</a> 
                        <a href='hapus_siswa.php?no_sewa=".$sarpras['nisn']."'>Hapus</a>
                    </td>
                    <tr>";
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>