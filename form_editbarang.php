<?php
    include 'koneksi.php';

    $nomor = $_GET['nomor'];
    $sql = "SELECT * FROM tbbarang WHERE nomor='$nomor'";
    $query = mysqli_query($connect, $sql);
    $sarpras = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die ("data tidak ditemukan...");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <title>Edit Data Barang</title>
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
    <div class="iniform">
    <form action="edit_barang.php" method="post">
        <h3>Input Data Barang</h3>
        <table>
            <tr>
                <input type="hidden" value="<?php echo $sarpras ['nomor']?>" required="required" name="nomor" >
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" value="<?php echo $sarpras ['kode_barang']?>" required="required" name="kode_barang"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" value="<?php echo $sarpras ['nama_barang']?>" required="required" name="nama_barang"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="number" value="<?php echo $sarpras ['jumlah']?>" required="required" name="jumlah"></td>
            </tr>
            <tr>
                <td>Nama Peminjam</td>
                <td><input type="text" value="<?php echo $sarpras ['nama_peminjam']?>" required="required" name="nama_peminjam"></td>
            </tr>
            <tr>
                <td>Status Barang</td>
                <td><input type="text" value="<?php echo $sarpras ['status_barang']?>" required="required" name="status_barang"></td>
            </tr>
        </table>
        <button type="submit" name="update" class="btn">Update</button>
    </form>
</body>
</html>