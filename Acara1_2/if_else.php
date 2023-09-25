<?php
$username = "Tasya";
$password = "1234";

echo "Masukkan Username: ";
$username = trim(fgets(STDIN));

echo "Masukkan Password: ";
$password = trim(fgets(STDIN));

if ($username === $username && $password === $password) {
    echo "Login berhasil!\n";
} else {
    echo "Login gagal! Silakan coba lagi.\n";
}
?>