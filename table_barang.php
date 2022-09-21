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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700&display=swap" rel="stylesheet">
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
        <div class="table_konten">
            <table>
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Nama Peminjam</th>
                        <th>Status Barang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                    $sql = "SELECT * from tbbarang";
                    $query = mysqli_query($connect, $sql);

                    while ($sarpras = mysqli_fetch_array($query)) {
                    echo"
                    <tbody>
                        <tr>
                            <td>$sarpras[nomor]</td>
                            <td>$sarpras[kode_barang]</td>
                            <td>$sarpras[nama_barang]</td>
                            <td>$sarpras[jumlah]</td>
                            <td>$sarpras[nama_peminjam]</td>
                            <td>$sarpras[status_barang]</td>
                            <td>
                                <a href='form_editbarang.php?nomor=".$sarpras['nomor']."'>Edit</a> 
                                <a href='hapus_barang.php?nomor=".$sarpras['nomor']."'>Hapus</a>
                            </td>
                        <tr>
                    </tbody>";
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>