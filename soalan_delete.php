<?php
    include("sambungan.php");

    $idsoalan = $_POST["idsoalan"];

    $sql = "delete from soalan where idsoalan = '$idsoalan' ";
    $result = mysqli_query($sambungan, $sql);
    if ($result == true)
        echo "<script>alert('Soalan berjaya dipadamkan'); window.location='soalan_delete.html';</script>";
    else
        echo "<script>alert('Gagal memadam soalan'); window.location='soalan_delete.html';</script>";
?>