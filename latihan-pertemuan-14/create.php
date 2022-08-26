<?php

include 'koneksi.php';

$nama             = $_POST["nama"];
$alamat           = $_POST["alamat"];
$jenis_kelamin    = $_POST["jenis_kelamin"];
$agama            = $_POST["agama"];
$sekolah_asal     = $_POST["sekolah_asal"];

//insert data
$query = "INSERT INTO data_mahasiswa SET nama='$nama',alamat='$alamat',jenis_kelamin='$jenis_kelamin',agama='$agama',sekolah_asal='$sekolah_asal'";
mysqli_query($koneksi,$query);
//mengalihkan ke halaman index.php

session_start();

$_SESSION["tes"] = 0;

header("location:read_form.php?");
?>