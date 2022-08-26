<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="create.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="textarea" name="alamat"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L">Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="P">Perempuan
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><select name="agama">
                    <option value="islam">Islam</option>
                    <option value="kristen_protestan">Kristen Protestan</option>
                    <option value="kristen_katolik">Kristen Katolik</option>
                    <option value="hindu">Hindu</option>
                    <option value="buddha">Buddha</option>
                    <option value="konghucu">Konghucu</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Sekolah Asal</td>
                <td>
                    <input type="text" name="sekolah_asal">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>