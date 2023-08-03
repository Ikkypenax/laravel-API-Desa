<html>
<head>
    <title>Daftar Desa</title>
</head>
<body>
    <h1>Daftar Desa</h1>
    <ul>
        @foreach($desa as $item)
            <li>{{ $item['nama_desa'] }} </li>
        @endforeach
    </ul>
</body>
</html>