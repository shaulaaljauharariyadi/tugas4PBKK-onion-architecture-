<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormulirRequest;
use App\Models\Formulir;
use Illuminate\Support\Facades\Validator;

class FormulirController extends Controller
{
    // Menampilkan formulir
    public function showForm()
    {
        return view('formulir');
    }

    // Mengirimkan formulir
    public function submitForm(FormulirRequest $request)
    {
        $data = $request->validated();

        // Validasi ukuran gambar
        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048', // Maksimum 2MB
        ]);

        // Jika ukuran gambar melebihi batas, kembali ke halaman formulir dengan pesan kesalahan
        if ($validator->fails()) {
            return redirect()->route('formulir')
                ->withErrors($validator)
                ->withInput();
        }

        // Upload gambar
        $gambarPath = $request->file('gambar')->store('storage/gambar');

        Formulir::create([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'alamat' => $data['alamat'],
            'nilai' => $data['nilai'],
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('formulir')->with('success', 'Form berhasil disimpan!');
    }

    // Menampilkan halaman hasil isian formulir
    public function showHasil()
    {
        $dataFormulir = Formulir::orderBy('created_at', 'desc')->get();
        return view('hasil_formulir', ['dataFormulir' => $dataFormulir]);
    }

    // Menampilkan detail data formulir
    public function showData($id)
    {
        $dataFormulir = Formulir::findOrFail($id);

        return view('detail_formulir', ['dataFormulir' => $dataFormulir]);
    }
}
