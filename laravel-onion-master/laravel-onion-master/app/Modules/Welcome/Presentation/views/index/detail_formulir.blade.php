<!-- resources/views/detail_formulir.blade.php -->

<h1>Detail Formulir</h1>
<p>Nama: {{ $dataFormulir->nama }}</p>
<p>Email: {{ $dataFormulir->email }}</p>
<p>Alamat: {{ $dataFormulir->alamat }}</p>
<p>Nilai: {{ $dataFormulir->nilai }}</p>
<img src="{{ asset('storage/gambar' . $dataFormulir->gambar) }}" alt="Gambar">


<a href="{{ route('formulir') }}">Kembali ke Daftar Formulir</a>

