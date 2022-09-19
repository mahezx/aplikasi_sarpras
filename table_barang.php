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
        <button class="btn"><a href="form_pinjam.html">Tambah</a></button>
        <div class="table">
            <table border="1px">
                <tr>
                    <th>Nomor Sewa</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Jumlah</th>
                    <th>Nama Peminjam</th>
                    <th>Status Barang</th>
                    <th>Action</th>
                </tr>
                <?php
                    $sql = "SELECT * from tbbarang";
                    $query = mysqli_query($connect, $sql);

                    while ($sarpras = mysqli_fetch_array($query)) {
                    echo"
                    <tr>
                    <td>$sarpras[no_sewa]</td>
                    <td>$sarpras[kode_barang]</td>
                    <td>$sarpras[nama_barang]</td>
                    <td>$sarpras[kategori]</td>
                    <td>$sarpras[jumlah]</td>
                    <td>$sarpras[nama_peminjam]</td>
                    <td>$sarpras[status_barang]</td>
                    <td>
                        <a href='form_editbarang.php?no_sewa=".$sarpras['no_sewa']."'>Edit</a> 
                        <a href='hapus_barang.php?no_sewa=".$sarpras['no_sewa']."'>Hapus</a>
                    </td>
                    <tr>";
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>