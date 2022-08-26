<?php
include "koneksi.php";
$id         = $_GET["id_mhs"];
$mahasiswa  = mysqli_query($koneksi, "select * from data_mahasiswa where id = '$id'");
$row        = mysqli_fetch_array($mahasiswa);

function active_radio_button($value, $input)
{
    //apabila value dari radio sama dengan yang di input
    $result = $value == $input ? "checked" : "";
    return $result;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Talent</title>
</head>

<body>
    <form method="POST" action="edit.php">
        <input type="hidden" value="<?php echo $row['id']; ?>" name="id_mhs">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $row['nama']?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="textarea" name="alamat" value="<?php echo $row['alamat'] ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L"><?php echo active_radio_button("L", $row["jenis_kelamin"]); ?> > Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="P"><?php echo active_radio_button("P", $row["jenis_kelamin"]); ?> > Perempuan
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
                        <?php
                        $agama = array("islam","kristen_protestan","kristen_katolik","hindu","buddha","konghucu");

                            foreach ($agama as $j) {
                            echo "<option value = '$j'";
                            echo $row['agama'] == $j ? 'selected="selected"' : '';
                            echo ">$j</option>";
                        } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Sekolah Asal</td>
                <td>
                    <input type="text" name="sekolah_asal" value="<?php echo $row['sekolah_asal']?>">
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