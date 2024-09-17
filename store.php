<?php
// Simpan data kamera ke database
// Ganti dengan konfigurasi koneksi database Anda
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'sewa_kamera';

$connection = mysqli_connect($host, $username, $password, $database);
if (!$connection) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}

$nama = $_POST['nama'];
$tipe_kamera = $_POST['tipe_kamera'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_pengembalian = $_POST['tgl_pengembalian'];
$jumlah = $_POST['jumlah'];
$jaminan = $_POST['jaminan'];

$query = "INSERT INTO data_peminjam (nama, tipe_kamera, tgl_pinjam, tgl_pengembalian, jumlah, jaminan)
          VALUES ('$nama', '$tipe_kamera', '$tgl_pinjam', '$tgl_pengembalian', $jumlah, '$jaminan')";
$result = mysqli_query($connection, $query);

mysqli_close($connection);

if ($result) {
    $message = "Peminjam berhasil ditambahkan.";
} else {
    $message = "Terjadi kesalahan: " . mysqli_error($connection);
}

header("Location: struck.php?message=" . urlencode($message));
exit();
?>
