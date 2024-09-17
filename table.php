<!DOCTYPE html>
<html>
<head>
    <title>Zabila Sewa Kamera</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        h2 {
            padding-top: 20px;
        }
        h1, h2, th {
            color: white;
        }
        .message {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
        }
        .btn {
            margin-top: 10px;
        }
        table {
            background-color: transparent !important;
        }
        tbody {
            background-color: transparent !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5 text-center">Zabila Creative</h1>

        <?php
        // Tampilkan pesan jika ada
        if (isset($_GET['message'])) {
            echo '<div class="message alert alert-primary">' . $_GET['message'] . '</div>';
        }
        ?>

        <h2>Data Peminjam</h2>
        <a href="create.php" class="btn btn-primary">Tambah Data Peminjam</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th class="mt-5 text-center">No.</th>
                    <th class="mt-5 text-center">Nama</th>
                    <th class="mt-5 text-center">Tipe Kamera</th>
                    <th class="mt-5 text-center">Tanggal Pinjam</th>
                    <th class="mt-5 text-center">Tanggal Pengembalian</th>
                    <th class="mt-5 text-center">Jumlah</th>
                    <th class="mt-5 text-center">Jaminan</th>
                    <th class="mt-5 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Ambil data kamera dari database
                // Ganti dengan konfigurasi koneksi database Anda
                $host = 'localhost';
                $username = 'root';
                $password = '';
                $database = 'sewa_kamera';

                $connection = mysqli_connect($host, $username, $password, $database);
                if (!$connection) {
                    die('Koneksi database gagal: ' . mysqli_connect_error());
                }

                $query = "SELECT * FROM data_peminjam";
                $result = mysqli_query($connection, $query);

                // ...

                if (mysqli_num_rows($result) > 0) {
                    $counter = 1; // Variabel penanda nomor urut

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td class="mt-5 text-center">' . $counter . '</td>'; // Menampilkan nomor urut
                        echo '<td class="mt-5 text-center">' . $row['nama'] . '</td>';
                        echo '<td class="mt-5 text-center">' . $row['tipe_kamera'] . '</td>';
                        echo '<td class="mt-5 text-center">' . $row['tgl_pinjam'] . '</td>';
                        echo '<td class="mt-5 text-center">' . $row['tgl_pengembalian'] . '</td>';
                        echo '<td class="mt-5 text-center">' . $row['jumlah'] . '</td>';
                        echo '<td class="mt-5 text-center">' . $row['jaminan'] . '</td>';
                        echo '<td class="mt-5 text-center">
                                <a href="edit.php?id=' . $row['id'] . '" class="btn btn-sm btn-warning">Edit</a>
                                <a href="delete.php?id=' . $row['id'] . '" class="btn btn-sm btn-danger">Delete</a>
                            </td>';
                        echo '</tr>';

                        $counter++; // Menambah nilai counter setiap kali data ditampilkan
                    }
                } else {
                    echo '<tr><td colspan="8">Tidak ada data kamera.</td></tr>';
                }

                // ...


                mysqli_close($connection);
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
