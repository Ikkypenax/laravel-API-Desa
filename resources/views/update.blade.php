<html>
<head>
    <title>Update Desa</title>
</head>
<body>
    <h1>Update Desa</h1>
    <form method="POST" action="/api/desa/{{ $desa['id'] }}">
        @csrf
        @method('PUT')
        <label for="nama_desa">Nama Desa:</label>
        <input type="text" id="nama_desa" name="nama_desa" value="{{ $desa['nama_desa'] }}" required>
        <br>
        <label for="provinsi">Provinsi:</label>
        <input type="text" id="provinsi" name="provinsi" value="{{ $desa['provinsi'] }}" required>
        <br>
        <!-- Tambahkan input untuk kolom lain jika diperlukan -->
        <button type="submit">Update</button>
    </form>
</body>
</html>