<?php
    include 'koneksi.php';

    $no_sewa = $_GET['no_sewa'];
    $sql = "SELECT * FROM tbbarang WHERE no_sewa='$no_sewa'";
    $query = mysqli_query($connect, $sql);
    $sarpras = mysqli_fetch_array($query);

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
    <title>Edit Barang</title>
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
    <li><a href="#">Data Siswa</a></li>
    <li><a href="#">Data Barang</a></li>
</ul>
</div>
<div class="iniform">
<form action="edit_barang.php" method="post">
    <h3>Input Data Barang</h3>
    <table border="1px">
        <tr>
            <input type="hidden" value="<?php echo $sarpras ['no_sewa']?>" required="required" name="no_sewa" >
        <tr>
            <td>Kode Barang</td>
            <td><input type="text" value="<?php echo $sarpras ['kode_barang']?>" required="required" name="kode_barang"></td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" value="<?php echo $sarpras ['nama_barang']?>" required="required" name="nama_barang"></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td><input type="text" value="<?php echo $sarpras ['kategori']?>" required="required" name="kategori"></td>
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
    <input type="submit" name="update" value="update">
</form>
</body>
</html>