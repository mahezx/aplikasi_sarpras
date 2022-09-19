<?php
    include 'koneksi.php';

    if(isset($_GET['no_sewa'])){
        header('Location: table_barang.php');
    }
    
    $no_sewa= $_GET['no_sewa'];

    $sql= "DELETE FROM tbbarang WHERE no_sewa='$no_sewa'";
    $query= mysqli_query($connect,$sql);


    if($query){
        header('Location: table_barang.php');
    }else{
        header('Location: hapus_barang?status=gagal');
    }
?>