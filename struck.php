<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="struck.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="struck-header">
            <h1 class="mt-5 text-center">Struck Peminjaman</h1>
        </div>

        <div class="message">
            <?php
            // Mendapatkan pesan dari parameter URL
            $message = isset($_GET['message']) ? $_GET['message'] : '';
            echo $message;
            ?>
        </div>

        <h3 class="data">Data Peminjam:</h3>
        <table class="table table-bordered data">
            <?php
            // Ganti dengan konfigurasi koneksi database Anda
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'sewa_kamera';

            $connection = mysqli_connect($host, $username, $password, $database);
            if (!$connection) {
                die('Koneksi database gagal: ' . mysqli_connect_error());
            }

            $query = "SELECT * FROM data_peminjam ORDER BY id DESC LIMIT 1";
            $result = mysqli_query($connection, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $nama = $row['nama'];
                $tipe_kamera = $row['tipe_kamera'];
                $tgl_pinjam = $row['tgl_pinjam'];
                $tgl_pengembalian = $row['tgl_pengembalian'];
                $jumlah = $row['jumlah'];
                $jaminan = $row['jaminan'];

                mysqli_free_result($result);
            }

            mysqli_close($connection);
            ?>
            <tr>
                <th>Nama</th>
                <td><?php echo isset($nama) ? $nama : ''; ?></td>
            </tr>
            <tr>
                <th>Tipe Kamera</th>
                <td><?php echo isset($tipe_kamera) ? $tipe_kamera : ''; ?></td>
            </tr>
            <tr>
                <th>Tanggal Pinjam</th>
                <td><?php echo isset($tgl_pinjam) ? $tgl_pinjam : ''; ?></td>
            </tr>
            <tr>
                <th>Tanggal Pengembalian</th>
                <td><?php echo isset($tgl_pengembalian) ? $tgl_pengembalian : ''; ?></td>
            </tr>
            <tr>
                <th>Jumlah</th>
                <td><?php echo isset($jumlah) ? $jumlah : ''; ?></td>
            </tr>
            <tr>
                <th>Jaminan</th>
                <td><?php echo isset($jaminan) ? $jaminan : ''; ?></td>
            </tr>
        </table>

        <div class="button-container">
            <a href="index.html" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</body>
</html>
