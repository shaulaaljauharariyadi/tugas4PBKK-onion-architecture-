<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Formulir</title>
</head>
<body>
    <h1>Hasil Formulir</h1>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Nilai</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataFormulir as $formulir)
            <tr>
                <td>{{ $formulir->nama }}</td>
                <td>{{ $formulir->email }}</td>
                <td>{{ $formulir->alamat }}</td>
                <td>{{ $formulir->nilai }}</td>
                <td><img src="{{ asset('storage/' . $formulir->gambar) }}" alt="{{ $formulir->nama }}" width="100"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
