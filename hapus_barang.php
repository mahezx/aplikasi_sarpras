<?php
    include 'koneksi.php';

    if(isset($_GET['nomor'])){
        header('Location: table_barang.php');
    }
    
    $nomor= $_GET['nomor'];

    $sql= "DELETE FROM tbbarang WHERE nomor='$nomor'";
    $query= mysqli_query($connect,$sql);

    if($query){
        header('Location: table_barang.php');
    }else{
        header('Location: hapus_barang?status=gagal');
    }
?>