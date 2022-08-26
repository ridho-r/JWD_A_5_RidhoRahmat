<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Siswa yang Sudah Mendaftar</h2>
    <a href="create_form.php">[+] Tambah Baru</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Jenis Kelamin</td>
            <td>Agama</td>
            <td>Sekolah Asal</td>
            <td>Aksi</td>
        </tr>
        <?php

        include "koneksi.php";

        $ambilData = mysqli_query($koneksi, "SELECT * FROM data_mahasiswa");

        $no = 1;

        foreach ($ambilData as $row) {
            $jenis_kelamin = $row["jenis_kelamin"] == "P" ? "Perempuan" : "Laki-laki";
            echo "<tr>
        <td>$no</td>
        <td>" . $row["nama"] . "</td>
        <td>" . $row["alamat"] . "</td>
        <td>" . $jenis_kelamin . "</td>
        <td>" . $row["agama"] . "</td>
        <td>" . $row["sekolah_asal"] . "</td>
        <td><a class='btn btn-primary btn-sm' href='edit_form.php?id_mhs=$row[id]'>Edit</a> <a class='btn btn-danger btn-sm' href='delete.php?id_mhs=$row[id]'>Delete</a></td></tr>";
            $no++;
        }
        ?>
    </table>

    <?php

    session_start();

    if (isset($_SESSION["tes"])) {
        echo "<br>Data berhasil ditambahkan!<br>";
        unset($_SESSION["tes"]);
    }

    $jumlah_mahasiswa = mysqli_num_rows($ambilData);
    echo "<br>Total Mahasiswa : $jumlah_mahasiswa";

    ?>
</body>

</html>