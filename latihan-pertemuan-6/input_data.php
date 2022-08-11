<?php
include "config.php";
session_start();

$nama = $_POST["nama"]; 
$alamat = $_POST["alamat"];
$tempatLahir = $_POST["tempatLahir"];
$tanggalLahir = $_POST["tanggalLahir"];
$jenisKelamin = $_POST["jenisKelamin"];
$usia = $_POST["usia"];

mysqli_query($connect,"insert into data_user values('','$nama','$alamat','$tempatLahir','$tanggalLahir','$jenisKelamin','$usia')");

header("location:form_biodata.php");
?>