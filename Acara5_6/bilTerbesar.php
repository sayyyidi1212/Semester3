<?php
function cariTerbesar($bilangan1, $bilangan2) {
    if ($bilangan1 > $bilangan2) {
        return $bilangan1;
    } else {
        return $bilangan2;
    }
}
$bilangan1 = 100;
$bilangan2 = 150;
$terbesar = cariTerbesar($bilangan1, $bilangan2);

echo "Dari $bilangan1 dan $bilangan2, bilangan terbesar adalah $terbesar.";
?>