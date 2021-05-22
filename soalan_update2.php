<?php
$idsoalan = $_GET['idsoalan'];
$soalan = $_GET['soalan'];
$pilihana = $_GET['pilihana'];
$pilihanb = $_GET['pilihanb'];
$pilihanc = $_GET['pilihanc'];
$jawapan = $_GET['jawapan'];
$idguru = $_GET['idguru'];
?>

<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<h3 class="panjang">KEMASKINI SOALAN</h3>
<form class="panjang" action="soalan_update.php" method="post">
    <table>
        <tr>
            <td>ID Soalan</td>
            <td><input type="text" name="idsoalan" value="<?php echo $idsoalan; ?>" readonly></td>
        </tr>
        <tr>
            <td>Soalan</td>
            <td><input type="text" name="namasoalan" value="<?php echo $soalan; ?>"></td>
        </tr>
        <tr>
            <td>Pilihan A</td>
            <td><input type="text" name="pilihana" value="<?php echo $pilihana; ?>"></td>
        </tr>
        <tr>
            <td>Pilihan B</td>
            <td><input type="text" name="pilihanb" value="<?php echo $pilihanb; ?>"></td>
        </tr>
        <tr>
            <td>Pilihan C</td>
            <td><input type="text" name="pilihanc" value="<?php echo $pilihanc; ?>"></td>
        </tr>

        <tr>
            <td>Jawapan</td>
            <td><input type="text" name="jawapan" value="<?php echo $jawapan; ?>"></td>
        </tr>
        <tr>
            <td>ID Guru</td>
            <td><input type="text" name="idguru" value="<?php echo $idguru; ?>"></td>
        </tr>
    </table>
    <button class="update" type="submit">Update</button>
    <a href="guru_pilih_soalan.php" target="kandungan">Atau Pilih Dari Soalan</a>
</form>