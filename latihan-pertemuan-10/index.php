<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
    <h2 class="text-center">List Mahasiswa</h2>

    <a href="form-input.php" class="btn btn-primary btn-sm" style="margin-left:5px">Tambah data</a><br><br>

    <table class="table table-striped">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>GENDER</th>
            <th>JURUSAN</th>
            <th>ACTION</th>
        </tr>
        <?php

        include "koneksi.php";
        $mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa");
        $no = 1;
        foreach ($mahasiswa as $row) {
            $jenis_kelamin = $row["jenis_kelamin"] == "P" ? "Perempuan" : "Laki laki";
            echo "<tr>
            <td>$no</td>
            <td>" . $row["nim"] . "</td>
            <td>" . $row["nama"] . "</td>
            <td>" . $row["jenis_kelamin"] . "</td>
            <td>" . $row["jurusan"] . "</td>
            <td><a class='btn btn-primary btn-sm' href='form-edit.php?id_mhs=$row[id_mhs]'>Edit</a> <a class='btn btn-danger btn-sm' href='delete.php?id_mhs=$row[id_mhs]'>Delete</a></td>
            </tr>";
            $no++;
        }
        ?>
    </table>
</body>

</html>