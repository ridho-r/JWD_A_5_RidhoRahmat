<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container-sm">
        <p class="h1 text-center">Form Biodata</p>
        <form method="post" action="input_data.php">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="mb-3">
                <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempatLahir" name="tempatLahir">
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir">
                </div>
                <div class="col mb-3">
                    <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jenisKelamin" name="jenisKelamin">
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="col mb-3">
                    <label for="usia" class="form-label">Usia</label>
                    <input type="number" min="1" max="999" class="form-control" id="usia" name="usia">
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <p class="h2 text-center" style="margin-top: 10vh;">Data Pengguna</p>
        <table class="table table-striped" style="margin-bottom:10vh">
            <?php
            while ($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['nama'] . "</td>";
                echo "<td>" . $user_data['alamat'] . "</td>";
                echo "<td>" . $user_data['tempatLahir'] . "</td>";
                echo "<td>" . $user_data['tanggalLahir'] . "</td>";
                echo "<td>" . $user_data['jenisKelamin'] . "</td>";
                echo "<td>" . $user_data['usia'] . "</td>";
            }
            ?>
        </table>
    </div>

</body>

</html>