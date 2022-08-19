<?php
include "koneksi.php";

$namaMerek = $_POST["namaMerek"];
$warna = $_POST["warna"];
$jumlah = $_POST["jumlah"];

$query = "INSERT INTO printer SET nama_merek='$namaMerek',warna='$warna',jumlah='$jumlah'";

mysqli_query($koneksi,$query);
header("location:tambah_barang.html");
?>