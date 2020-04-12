<?php
$a = 8000;
$b = 7500;
$c = 300;

$hsl = ($a - $b) / $c;

echo "Harga Beli = Rp $a <br>";
echo "Harga Beli = Rp $b <br>";
echo "Keuntungan = Rp $c <br>";
echo "Berapa Jumlah kambing yang dibeli? <br>";
echo "Jawaban : ". round($hsl) ." ekor";
?>