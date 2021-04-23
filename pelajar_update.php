<?php
    include("sambungan.php");

    $idpelajar = $_POST["idpelajar"];
    $namapelajar = $_POST["namapelajar"];
    $idkelas = $_POST["idkelas"];
    $password = $_POST["password"];

    $sql = "update pelajar set namapelajar = '$namapelajar', idkelas = '$idkelas', password = '$password' where idpelajar = '$idpelajar' ";

    $result = mysqli_query($sambungan, $sql);

    if ($result == true)
        echo "<script>alert('Pelajar berjaya dikemaskini'); window.location='pelajar_update.html';</script>";
    else
        echo "<script>alert('Gagal mengemaskini pelajar'); window.location='pelajar_update.html';</script>";
?>