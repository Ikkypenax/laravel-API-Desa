<html>
<head>
    <title>Tambah Desa Baru</title>
</head>
<body>
    <h1>Tambah Desa Baru</h1>
    <form method="POST" action="/api/desa">
        @csrf
        <label for="nama_desa">Nama Desa:</label>
        <input type="text" id="nama_desa" name="nama_desa" required>
        <br>
        <label for="provinsi">Provinsi:</label>
        <input type="text" id="provinsi" name="provinsi" required>
        <br>
        <!-- Tambahkan input untuk kolom lain jika diperlukan -->
        <button type="submit">Simpan</button>
    </form>
</body>
</html>