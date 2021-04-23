<?php
    include( "sambungan.php" );

    $idguru = $_POST["idguru"];
    $sql = "delete from guru where idguru = '$idguru' ";
    $result = mysqli_query( $sambungan, $sql );
    if ( $result == true )
        echo "<script>alert('Guru berjaya dipadam'); window.location='guru_delete.html';</script>";
    else
        echo "<script>alert('Gagal memadam guru'); window.location='guru_delete.html';</script>";
?>
