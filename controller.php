<?php
// Proses menyimpan data ke database

// Simpan data dalam variabel
$nama = $_POST["nama"];
$tipe_kamera = $_POST["tipe_kamera"];
$tgl_pinjam = $_POST["tgl_pinjam"];
$tgl_pengembalian = $_POST["tgl_pengembalian"];
$jumlah = $_POST["jumlah"];
$jaminan = $_POST["jaminan"];

// Menampilkan data yang disimpan dalam bentuk "struck"
echo "<h2 class='mt-5'>Struck Booking</h2>";
echo "<hr>";
echo "<p><strong>Nama:</strong> $nama</p>";
echo "<p><strong>Tipe Kamera:</strong> $tipe_kamera</p>";
echo "<p><strong>Tanggal Pinjam:</strong> $tgl_pinjam</p>";
echo "<p><strong>Tanggal Pengembalian:</strong> $tgl_pengembalian</p>";
echo "<p><strong>Jumlah:</strong> $jumlah</p>";
echo "<p><strong>Jaminan:</strong> $jaminan</p>";
?>
