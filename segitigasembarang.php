<?php
function luas($a, $b, $c)
{
    $s = ($a + $b + $c) / 2;
    $luas = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
    return $luas;
}
if (isset($_POST['submit'])) {
    $hasil = luas($_POST['n1'], $_POST['n2'], $_POST['n3']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Segitiga Sembarang</title>
</head>
<body>
<div>Menghitung luas segitiga yang diketahui ketiga sisinya</div>
    <form method="post">
        <div>Masukkan nilai ketiga sisi</div>
        <input name="n1" type="number" placeholder="Nilai 1..">
        <input name="n2" type="number" placeholder="Nilai 2..">
        <input name="n3" type="number" placeholder="Nilai 3..">
        <input type="submit" name="submit" value="Hasil">
    </form>
    <div><?php echo "Hasilnya: $hasil" ?></div>
</body>
</html>
