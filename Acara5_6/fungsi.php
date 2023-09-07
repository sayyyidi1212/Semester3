<?php
echo "MEMBUAT FUNGSI \n";
function berhasil() {
    echo "Selamat Anda Berhasil \n";
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
echo "\n";
echo "FUNGSI DENGAN PARAMETER \n";
function jumlah ($a,$b) { //fungsi denagn 2 parameter
    return $a + $b; //nilai kembali (return value)
} 
$nilai1 = 10;
$nilai2 = 15;
echo jumlah($nilai1,$nilai2); //passing parameter
echo "\n";
echo "\n";
echo "FUNGSI BAWAAN ";
$sekarang = getdate();
print_r($sekarang); //hasilnya berupa array
echo "\n"; //ambil elemen untuk menampilkan tanggal
echo "Sekarang tanggal :" . $sekarang["mday"];
?>