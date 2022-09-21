<?php
    include 'koneksi.php';

    if(isset($_POST['tambah'])) {
        $nomor = $_POST ['nomor'];
        $nisn = $_POST ['nisn'];
        $nama_siswa = $_POST ['nama'];
        $nomor_telepon = $_POST ['telepon'];
        $kelas_jurusan = $_POST ['kelas_jurusan'];

        $sql = "INSERT INTO tbsiswa VALUES('$nomor','$nisn','$nama_siswa','$nomor_telepon','$kelas_jurusan')";
        $query = mysqli_query($connect, $sql);

        if($query){
            header ('Location: table_siswa.php');
        }else{
            header ('Location: simpan_siswa?status=gagal');
        }
    }
?>