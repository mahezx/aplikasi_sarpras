<?php
    include 'koneksi.php';

    $nomor= $_GET['nomor'];
    $sql="SELECT * FROM tbsiswa WHERE nomor='$nomor'";
    $query= mysqli_query($connect,$sql);
    $siswa= mysqli_fetch_assoc($query);

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edit Barang</title>
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
    <div class="iniform">
    <form action="edit_siswa.php" method="post">
        <h3>Edit Data Siswa</h3>
        <table>
            <tr>
                <input type="hidden" value="<?php echo $siswa ['nomor']?>" required="required" name="nomor" >
            <tr>
                <td>NISN</td>
                <td><input type="number" value="<?php echo $siswa ['nisn']?>" required="required" name="nisn"></td>
            </tr>
            <tr>
                <td>Nama Siswa</td>
                <td><input type="text" value="<?php echo $siswa ['nama']?>" required="required" name="nama"></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td><input type="number" value="<?php echo $siswa ['telepon']?>" required="required" name="telepon"></td>
            </tr>
            <tr>
                <td>Kelas & Jurusan</td>
                <td><input type="text" value="<?php echo $siswa ['kelas_jurusan']?>" required="required" name="kelas_jurusan"></td>
            </tr>
        </table>
        <button type="submit" name="update" class="btn">Update</button>
    </form>
</body>
</html>