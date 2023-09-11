<?php
$matriksA = array(
    array(1, 1, 1),
    array(2, 2, 2),
    array(3, 3, 3)
);

$matriksB = array(
    array(3, 3, 3),
    array(2, 2, 2),
    array(1, 1, 1)
);
$hasilMatriks = array();

for ($i = 0; $i < 3; $i++) { //looping untuk menjumlahkan
    for ($j = 0; $j < 3; $j++) {
        $hasilMatriks[$i][$j] = $matriksA[$i][$j] + $matriksB[$i][$j];
    }
}
echo "Matriks A:\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matriksA[$i][$j] . " ";
    }
    echo "\n";
}
echo "\nMatriks B:\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matriksB[$i][$j] . " ";
    }
    echo "\n";
}
echo "\nHasil Penjumlahan Matriks A dan B:\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $hasilMatriks[$i][$j] . " ";
    }
    echo "\n";
}
?>