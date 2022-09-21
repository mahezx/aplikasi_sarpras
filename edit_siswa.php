<?php
    include 'koneksi.php';

    if(isset($_POST['nomor'])){
        $nomor = $_POST ['nomor'];
        $nisn = $_POST ['nisn'];
        $nama = $_POST ['nama'];
        $nomor_telepon = $_POST ['telepon'];
        $kelas_jurusan = $_POST ['kelas_jurusan'];

        $sql="UPDATE tbsiswa SET nisn='$nisn',nama='$nama',telepon='$nomor_telepon',kelas_jurusan='$kelas_jurusan' WHERE nomor='$nomor'";
        $query= mysqli_query($connect, $sql);

        if($query){
            header('Location: table_siswa.php');
        }else{
            header('Location: edit_siswa.php?status=gagal');
        }
    }
?>