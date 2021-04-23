<?php
    include("sambungan.php");

    $idkelas = $_POST["idkelas"];
    $namakelas = $_POST["namakelas"];

    $sql = "insert into kelas values('$idkelas', '$namakelas')";

    echo $sql;

    $result = mysqli_query($sambungan, $sql);
    if ($result == true)
        echo "<script>alert('Kelas berjaya ditambah'); window.location='kelas_insert.html';</script>";
    else
        echo "<script>alert('Gagal memadam kelas'); window.location='kelas_insert.html';</script>";
?>