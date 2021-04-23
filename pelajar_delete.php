<?php
    include("sambungan.php");

    $idpelajar = $_POST["idpelajar"];

    $sql = "delete from pelajar where idpelajar = '$idpelajar' ";
    $result = mysqli_query($sambungan, $sql);
    if ($result == true)
        echo "<script>alert('Pelajar berjaya dipadam'); window.location='pelajar_delete.html';</script>";
    else
        echo "<script>alert('Gagal memadam pelajar'); window.location='pelajar_delete.html';</script>";
?>