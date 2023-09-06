<?php
echo "Membuat Fungsi <br>";
function berhasil() {
    echo "Selemat Anda Berhasil";
}
function gagal() {
    echo "Maaf Anda Gagal";
}
$nilai = 90;
if ($nilai >= 75) {
    berhasil();
} else {
    gagal();
}
echo "<br>";
echo "Fungsi dengan Parameter <br>";
function jumlah ($a,$b) { // fungsi dengan 2 parameter
    return $a + $b; // nilai kembali (return value)
} 
$nilai1 = 10;
$nilai2 = 15;
echo jumlah($nilai,$nilai2); // passing parameter
echo "<br>";
echo "Fungsi Bawaan <br>";
$sekarang = getdate();
print_r($sekarang); //hasilnya berupa array
echo "<br>"; //ambil elemen untuk menampilkan tanggal
echo "Sekarang tanggal :" . $sekarang["mday "];
?>
