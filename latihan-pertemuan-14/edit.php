<?php

include 'koneksi.php';
//menyimpan data ke dlam variabel
$id_mhs         = $_POST["id_mhs"];
$nama           = $_POST["nama"];
$alamat         = $_POST["alamat"];
$jenis_kelamin  = $_POST["jenis_kelamin"];
$agama          = $_POST["agama"];
$sekolah_asal   = $_POST["sekolah_asal"];

//update data
$query = "UPDATE data_mahasiswa SET nama='$nama',alamat='$alamat',jenis_kelamin='$jenis_kelamin',agama='$agama',sekolah_asal='$sekolah_asal' where id ='$id_mhs'";
mysqli_query($koneksi,$query);
//mengalihkan ke halaman index.php
header("location:read_form.php");
?>