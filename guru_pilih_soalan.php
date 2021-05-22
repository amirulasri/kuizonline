<?php
  include('sambungan.php');
?>
<html>
<link rel="stylesheet" href="senarai.css">
<link rel="stylesheet" href="button.css">
<body>
   
    <form action="jawab_semak.php" method="post">
    <table>
        <caption>SOALAN KUIZ YANG DICIPTA</caption>
        <tr>
            <th>Bil</th>
            <th>Soalan</th>
        </tr>
        <?php
        $sql = "select * from soalan order by idsoalan ASC";
        $data = mysqli_query($sambungan, $sql);		
        $bil = 1;          
        while ($soalan = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td class="bil"><?php echo $bil; ?></td>
            <td class="soalan">
            <?php echo $soalan['namasoalan']; ?><br>
            <label><?php echo "A. ".$soalan['pilihana']; ?></label><br>
            <label><?php echo "B. ".$soalan['pilihanb']; ?></label><br>
            <label><?php echo "C. ".$soalan['pilihanc']; ?></label><br>
            <a href="soalan_update2.php?idsoalan=<?php echo $soalan['idsoalan'] ?>&soalan=<?php echo $soalan['namasoalan'] ?>&pilihana=<?php echo $soalan['pilihana'] ?>&pilihanb=<?php echo $soalan['pilihanb'] ?>&pilihanc=<?php echo $soalan['pilihanc'] ?>&jawapan=<?php echo $soalan['jawapan'] ?>&idguru=<?php echo $soalan['idguru'] ?>" target="kandungan">Pilih Soalan</a>
            
            </td>
        </tr>
        <?php $bil = $bil + 1; } ?>
    </table>
    <button class="semak" type="submit">Semak</button>
    </form>
</body>