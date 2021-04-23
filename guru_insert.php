<?php
    include( "sambungan.php" );

    $idguru = $_POST["idguru"];
    $namaguru = $_POST["namaguru"];
    $password = $_POST["password"];

    $sql = "insert into guru values('$idguru', '$namaguru', '$password')";
    $result = mysqli_query($sambungan, $sql);
    if ( $result == true )
        echo "<script>alert('Guru berjaya ditambah'); window.location='guru_insert.html';</script>";
    else
        echo "<script>alert('Gagal menambah guru'); window.location='guru_insert.html';</script>";
?>