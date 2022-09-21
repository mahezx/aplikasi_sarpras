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
        <button class="btn"><a href="form_siswa.html">Tambah</a></button>
        <div class="table_konten">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Nomor Telepon</th>
                        <th>Kelas & Jurusan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                    $sql = "SELECT * from tbsiswa";
                    $query = mysqli_query($connect, $sql);

                    while ($siswa = mysqli_fetch_array($query)) {
                    echo"
                    <tbody>
                        <tr>
                            <td>$siswa[nomor]</td>
                            <td>$siswa[nisn]</td>
                            <td>$siswa[nama]</td>
                            <td>$siswa[telepon]</td>
                            <td>$siswa[kelas_jurusan]</td>
                            <td>
                                <a href='form_editsiswa.php?nomor=".$siswa['nomor']."'>Edit</a> 
                                <a href='hapus_siswa.php?nomor=".$siswa['nomor']."'>Hapus</a>
                            </td>
                        <tr>
                    <tbody>";
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>