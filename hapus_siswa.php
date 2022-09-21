<?php
    include 'koneksi.php';

    if(isset($_GET['nomor'])){
        header('Location: table_siswa.php');
    }

    $nomor= $_GET['nomor'];

    $sql= "DELETE FROM tbsiswa WHERE nomor='$nomor'";
    $query= mysqli_query($connect, $sql);

    if($query){
        header('Location: table_siswa.php');
    }else{
        header('Location: hapus_siswa.php?status=gagal');
    }

?>