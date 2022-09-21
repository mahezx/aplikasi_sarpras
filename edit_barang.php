<?php
include 'koneksi.php';

if(isset($_POST['update'])) {
    $nomor = $_POST ['nomor'];
    $kode_barang = $_POST ['kode_barang'];
    $nama_barang = $_POST ['nama_barang'];
    $jumlah = $_POST ['jumlah'];
    $nama_peminjam = $_POST ['nama_peminjam'];
    $status_barang = $_POST ['status_barang'];

    $sql ="UPDATE tbbarang SET kode_barang='$kode_barang',nama_barang='$nama_barang',jumlah='$jumlah',nama_peminjam='$nama_peminjam',status_barang='$status_barang' WHERE nomor='$nomor' ";
    $query = mysqli_query($connect, $sql);

    if($query){
        header ('Location: table_barang.php');
    }else{
        header ('Location: edit-barang?status=gagal');
    }
} 
?>