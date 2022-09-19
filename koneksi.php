<?php
//menghubungkan file dengan database

$host="localhost";
$username="root";
$password="";
$database="sarpras";

$connect = mysqli_connect($host,$username,$password,$database) or die ("GAGAL MENGHUBUNGKAN");

?>