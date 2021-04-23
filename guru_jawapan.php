<?php
    include("sambungan.php");
    session_start();
    $idpelajar = $_POST['idpelajar'];
    $sql = "delete from kuiz where idpelajar = '$idpelajar' ";
    $result = mysqli_query($sambungan, $sql);
    if ($result == true)
        echo "<script>alert('Rekod berjaya dipadam'); window.location='guru_jawapan.html';</script>";
    else
        echo "<script>alert('Gagal memadam rekod'); window.location='guru_jawapan.html';</script>";
?>