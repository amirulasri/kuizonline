<?php
    include("sambungan.php");

    $idkelas = $_POST["idkelas"];
    $namakelas = $_POST["namakelas"];

    $sql = "update kelas set namakelas = '$namakelas' where idkelas = '$idkelas' ";

    $result = mysqli_query($sambungan, $sql);
    if ($result == true)
        echo "<script>alert('Kelas berjaya dikemaskini'); window.location='kelas_update.html';</script>";
    else
        echo "<script>alert('Gagal mengemaskini kelas'); window.location='kelas_update.html';</script>";
?>