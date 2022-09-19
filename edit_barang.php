<?php
include 'koneksi.php';

if(isset($_POST['update'])) {
    $no_sewa = $_POST ['no_sewa'];
    $kode_barang = $_POST ['kode_barang'];
    $nama_barang = $_POST ['nama_barang'];
    $kategori = $_POST ['kategori'];
    $jumlah = $_POST ['jumlah'];
    $nama_peminjam = $_POST ['nama_peminjam'];
    $status_barang = $_POST ['status_barang'];

    $sql ="UPDATE tbbarang SET kode_barang='$kode_barang',nama_barang='$nama_barang',kategori='$kategori',jumlah='$jumlah',nama_peminjam='$nama_peminjam',status_barang='$status_barang' WHERE no_sewa='$no_sewa' ";
    $query = mysqli_query($connect, $sql);

    if($query){
        header ('Location: table_barang.php');
    }else{
        header ('Location: edit-barang?status=gagal');
    }
} 
?>