<?php
    include("sambungan.php");

    $idguru = $_POST["idguru"];
    $namaguru = $_POST["namaguru"];
    $password = $_POST["password"];

    $sql = "update guru set namaguru = '$namaguru', password='$password' where idguru = '$idguru' ";

    $result = mysqli_query($sambungan, $sql);
    if ($result == true)
        echo "<script>alert('Guru berjaya dikemaskini'); window.location='guru_update.html';</script>";
    else
        echo "<script>alert('Guru gagal kemaskini'); window.location='guru_update.html';</script>";
?>