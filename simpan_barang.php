<?php
    include 'koneksi.php';

    if(isset($_POST['tambah'])){
        $no_sewa= $_POST['nomor'];
        $kode_barang= $_POST['kode_barang'];
        $nama_barang= $_POST['nama_barang'];
        $jumlah= $_POST['jumlah'];
        $nama_peminjam= $_POST['nama_peminjam'];
        $status_barang= $_POST['status_barang'];

        $sql = "INSERT INTO tbbarang VALUES ('$no_sewa','$kode_barang','$nama_barang','$jumlah','$nama_peminjam','$status_barang')";

        $query = mysqli_query ($connect, $sql);

        if($query) {
            header('Location: table_barang.php');
        }else{
            header('Location: simpan_barang?status=gagal');
        }
    }
?>