<?php
    include("sambungan.php");

    $idsoalan = $_POST["idsoalan"];
    $namasoalan = $_POST["namasoalan"];
    $pilihana = $_POST["pilihana"];
    $pilihanb = $_POST["pilihanb"];
    $pilihanc = $_POST["pilihanc"];
    $jawapan = $_POST["jawapan"];
    $idguru = $_POST["idguru"];

    $sql = "update soalan set namasoalan = '$namasoalan', pilihana = '$pilihana', pilihanb = '$pilihanb', pilihanc = '$pilihanc', jawapan = '$jawapan',  idguru = '$idguru' where idsoalan = '$idsoalan' ";
    $result = mysqli_query($sambungan, $sql);
    if ($result == true)
        echo "<script>alert('Soalan berjaya dikemaskini'); window.location='soalan_update.html';</script>";
    else
        echo "<script>alert('Gagal mengemaskini soalan'); window.location='soalan_update.html';</script>";
?>