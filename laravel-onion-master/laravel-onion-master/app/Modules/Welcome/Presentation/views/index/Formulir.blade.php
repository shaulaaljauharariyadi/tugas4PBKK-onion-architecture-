<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
</head>
<body>
    <h1>Formulir Pengisian Data</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('submit-form') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="nama">Nama :</label>
        <input type="text" name="nama" value="{{ old('nama') }}" required>
        <br>
        <br> 
        <label for="email">Email :</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        <br>
        <br>
        <label for="alamat">Alamat :</label>
        <textarea name="alamat" required>{{ old('alamat') }}</textarea>
        <br>
        <br>
        <label for="nilai">Nilai :</label>
        <input type="number" step="0.01" min="2.50" max="99.99" name="nilai" value="{{ old('nilai') }}" required>
        <br>
        <br>
        <label for="gambar">Gambar (Max 2MB):</label>
        <input type="file" name="gambar" accept=".png, .jpg, .jpeg" required>
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
