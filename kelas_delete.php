<?php
    include("sambungan.php");

    $idkelas = $_POST["idkelas"];

    $sql = "delete from kelas where idkelas = '$idkelas' ";
    $result = mysqli_query($sambungan, $sql);
    if ($result == true)
        echo "<script>alert('Kelas berjaya dipadam'); window.location='kelas_delete.html';</script>";
    else
        echo "<script>alert('Gagal memadam kelas'); window.location='kelas_delete.html';</script>";
?>