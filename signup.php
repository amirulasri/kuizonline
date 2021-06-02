<?php
include('sambungan.php'); 
if(isset($_POST['idpelajar'])) {    
    $idpelajar = $_POST["idpelajar"];
    $namapelajar = $_POST["namapelajar"];
    $idkelas = $_POST["idkelas"];
    $password = $_POST["password"];
    $sql = "insert into pelajar values('$idpelajar', '$namapelajar', '$idkelas', '$password')";
    $result = mysqli_query($sambungan, $sql);
    if ($result)
        echo "<script>alert('Berjaya signup')</script>";
    else 
        echo "<script>alert('Tidak berjaya signup')</script>";
    echo "<script>window.location='login.php'</script>";
}

//AUTO GENERATE ID UNTUK MURID
$queryidmurid = mysqli_query($sambungan, "SELECT MAX(idpelajar) AS idpelajarterakhir FROM pelajar");
$getdataidmurid = mysqli_fetch_assoc($queryidmurid);
$idmuridkini = $getdataidmurid['idpelajarterakhir'];
$buangpid = substr($idmuridkini,1);

//TAMBAH 1 PADA ID YANG SEDIA ADA
$murididbaru = $buangpid+1;

//JIKA TAK CUKUP 3 DIGIT, TAMBAH 00
if(strlen((string)$murididbaru) <= 1){
    $murididbaru = '00'.$murididbaru;
}elseif(strlen((string)$murididbaru) <= 2){
    $murididbaru = '0'.$murididbaru;
}

//TUKARKAN INTEGER KEPADA STRING
$stringidmurid = strval($murididbaru);

//TAMBAH SEMULA P PADA MULA MULA ID BARU
$idakhirbaru = 'P'.$stringidmurid;
?> 

<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<body background=''>
    <center>
    <img src='tajuk1.png'><br>
    <img src='tajuk2.png'>
    </center>

    <h3 class="panjang">SIGN UP</h3>
    <form class="panjang" action="signup.php" method="post" name="borangdaftar">
    <table>
        <tr>
            <td>ID Pelajar</td>
            <td><input type="text" name="idpelajar" value="<?php echo $idakhirbaru; ?>" placeholder="P001  max 4 char" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="namapelajar" required></td>        
        </tr>
        <tr>
            <td>Kelas</td>
            <td>
            <select name="idkelas" required>
            <?php
            $sql = "select * from kelas";
            $data = mysqli_query($sambungan, $sql);
            while ($kelas = mysqli_fetch_array($data)) {
                echo "<option value='$kelas[idkelas]'>$kelas[namakelas]</option>";		
            }
            ?>
            </select>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" placeholder="max: 8 char" required></td>
        </tr>
    </table>
    <button class="tambah" type="submit" onclick="return periksakatalaluan(document.borangdaftar.password,8,8)">Daftar</button>
    <button class="padam" type="button" onclick="window.location='login.php'">Batal</button>
</form>
<script>
        function periksakatalaluan(katalaluan, aksaraminimum, aksaramaksimum) {
            var inputkatalaluan = katalaluan.value;

            if (inputkatalaluan.length < aksaraminimum) {
                alert("Kata laluan yang anda masukkan kurang dari "+aksaraminimum+" aksara");
                return false;
            } else if (inputkatalaluan.length > aksaramaksimum){
                alert("Kata laluan yang anda masukkan lebih dari "+aksaramaksimum+" aksara");
                return false;
            }else{
                return confirm('Anda telah melengkapkan maklumat dengan betul. Klik OK untuk meneruskan pendaftaran, Klik Cancel untuk membatalkan pendaftaran');
            }
        }
    </script>
</body>
