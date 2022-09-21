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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title>
</head>
<body>
    <div class="sidebar">

        <!-- logo app -->
        <div class="app">
            <div class="logo"><img src="img/smktb.jpg" alt=""></div>
            <h2>STARBHAK SARPRAS</h2>
        </div>

        <!-- menu sidebar -->
        <ul>
            <li><i class="fa-sharp fa-solid fa-people-group"></i><a href="table_siswa.php">Data Siswa</a></li>
            <li><i class="fa-sharp fa-solid fa-box-open"></i><a href="table_barang.php">Data Barang</a></li>
        </ul>
    </div>

    <div class="content">
        <h2>DATA BARANG</h2>
        <a href="form_pinjam.html"><button class="btn">Tambah</button></a>
        <div class="table_konten">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
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
                            <a href='form_editbarang.php?nomor=".$sarpras['nomor']."'><button class='btn-edit'><i class='fa-solid fa-pen-to-square fa'></i></button></a>
                            <a href='hapus_barang.php?nomor=".$sarpras['nomor']."' onClick=\"return confirm('Yakin akan menghapus data?');\"><button class='btn-hapus'><i class='fa-sharp fa-solid fa-trash'></button></i></a>
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