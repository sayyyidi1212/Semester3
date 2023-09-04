//<?php 
//echo "Masukkan nama anda : ";
//$nama = readline();
//echo "Halo " . $nama;
//?>

<?php
$users = [
    'Tasya' => '1234',
    'Edra' => '2424',
    // Tambahkan pengguna lain sesuai kebutuhan.
];

echo "Masukkan username: ";
$username = trim(readline());

echo "Masukkan password: ";
$pass = trim(readline());

// Periksa apakah pengguna ada dalam daftar pengguna dan kata sandi sesuai.
if (isset($users[$username]) && $users[$username] === $pass) {
    echo "Login berhasil! Selamat datang, $username!";
} else {
    echo "Login gagal. Silakan cek kembali username dan password Anda.";
}

?>

