<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
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
        <h1 class="mt-5">Tambah Peminjam</h1>

        <form method="POST" action="store.php">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="mb-3">
                <label for="tipe_kamera" class="form-label">Tipe Kamera:</label>
                <select class="form-select" id="tipe_kamera" name="tipe_kamera" required>
                    <option value="" selected>Pilih Tipe Kamera</option>
                    <option value="Canon DSLR">Canon DSLR</option>
                    <option value="Canon Miroless">Canon Miroless</option>
                    <option value="Nikon DSLR">Nikon DSLR</option>
                    <option value="Nikon Miroless">Canon Miroless</option>
                    <option value="Sony DSLR">Nikon DSLR</option>
                    <option value="Sony Miroless">Canon Miroless</option>
                    <option value="Analog DSLR">Nikon DSLR</option>
                    <option value="Analog Miroless">Canon Miroless</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tgl_pinjam" class="form-label">Tanggal Pinjam:</label>
                <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" required>
            </div>

            <div class="mb-3">
                <label for="tgl_pengembalian" class="form-label">Tanggal Pengembalian:</label>
                <input type="date" class="form-control" id="tgl_pengembalian" name="tgl_pengembalian" required>
            </div>

            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah:</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" required>
            </div>

            <div class="mb-3">
                <label for="jaminan" class="form-label">Jaminan:</label>
                <select class="form-select" id="jaminan" name="jaminan" required>
                    <option value="" selected>Pilih Jaminan Anda</option>
                    <option value="KTP">KTP</option>
                    <option value="SIM">SIM</option>
                    <option value="KK">KK</option>
                    <option value="BPKB">BPKB</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
