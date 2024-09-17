<!DOCTYPE html>
<html>
<head>
    <title>Edit Peminjam</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        h1 {
            margin-top: 20px;
            margin-bottom: 20px;
            color: white;
        }
        form {
            margin-top: 20px;
        }
        label {
            margin-top: 10px;
            display: block;
            color: white;
        }
        .btn {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Peminjam</h1>

        <?php
        // Ambil data kamera berdasarkan ID dari database
        // Ganti dengan konfigurasi koneksi database Anda
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'sewa_kamera';

        $connection = mysqli_connect($host, $username, $password, $database);
        if (!$connection) {
            die('Koneksi database gagal: ' . mysqli_connect_error());
        }

        $id = $_GET['id'];
        $query = "SELECT * FROM data_peminjam WHERE id = $id";
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
        } else {
            die('Peminjam tidak ditemukan.');
        }

        mysqli_close($connection);
        ?>

        <form method="POST" action="update.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="tipe_kamera" class="form-label">Tipe Kamera:</label>
                <input type="text" id="tipe_kamera" name="tipe_kamera" value="<?php echo $row['tipe_kamera']; ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="tgl_pinjam" class="form-label">Tanggal Pinjam:</label>
                <input type="date" id="tgl_pinjam" name="tgl_pinjam" value="<?php echo $row['tgl_pinjam']; ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="tgl_pengembalian" class="form-label">Tanggal Pengembalian:</label>
                <input type="date" id="tgl_pengembalian" name="tgl_pengembalian" value="<?php echo $row['tgl_pengembalian']; ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah:</label>
                <input type="number" id="jumlah" name="jumlah" value="<?php echo $row['jumlah']; ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="jaminan" class="form-label">Jaminan:</label>
                <input type="text" id="jaminan" name="jaminan" value="<?php echo $row['jaminan']; ?>" class="form-control" required>
            </div>

            <input type="submit" value="Simpan" class="btn btn-primary">
            <a href="table.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
