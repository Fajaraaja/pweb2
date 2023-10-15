<?php
$nama = "Fajar Dwi Junianto";
$umur = 20;
$menikah = false;

//Deklarasi Tipe data pada variable
$tipenama = gettype($nama);
$tipeumur = gettype($umur);
$tipemenikah = gettype($menikah);

echo "Nama saya adalah $nama <br>";
echo "$nama sekarang berumur $umur tahun <br>";
if ($menikah == false) {
    echo "$nama saat ini belum menikah <br>";
} else {
    echo "$nama saat ini sudah menikah <br>";
}


echo "$nama bertipe $tipenama <br>";
echo "$umur bertipe $tipeumur <br>";
echo "$menikah bertipe $tipemenikah <br>";
