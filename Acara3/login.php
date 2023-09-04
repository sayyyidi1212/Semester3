//<?php 
//echo "Masukkan nama anda : ";
//$nama = readline();
//echo "Halo " . $nama;
//?>

<?php
$users = [
    'Tasya' => '1234',
    'Edra' => '2424',
];

echo "Masukkan username: ";
$username = trim(readline());

echo "Masukkan password: ";
$pass = trim(readline());

if (isset($users[$username]) && $users[$username] === $pass) {
    echo "Login berhasil! Selamat datang, $username!";
} else {
    echo "Login gagal. Silakan cek kembali username dan password Anda.";
}

?>