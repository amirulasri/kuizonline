<?php
include("sambungan.php");

$idpelajar = $_POST["idpelajar"];
$namapelajar = $_POST["namapelajar"];
$idkelas = $_POST["idkelas"];
$password = $_POST["password"];

$sql = "insert into pelajar values('$idpelajar', '$namapelajar', '$idkelas', '$password')";

$result = mysqli_query($sambungan, $sql);

if ($result == true)
    echo "<script>alert('Pelajar berjaya ditambah'); window.location='pelajar_insert.html';</script>";
else
    echo "<script>alert('Gagal menambah pelajar'); window.location='pelajar_insert.html';</script>";
