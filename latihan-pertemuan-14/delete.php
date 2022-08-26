<?php

include "koneksi.php";
//menyimpan data id kedalam variabel

$id_mhs = $_GET["id_mhs"];
//delete data
$query = "DELETE from data_mahasiswa where id='$id_mhs'";
mysqli_query($koneksi,$query);
//mengalihkan ke halaman index.php
header("location:read_form.php");

?>