<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use Illuminate\Http\Request;

class PenerimaController extends Controller
{
    public function index()
    {
        $penerima = Penerima::all();
        return view('penerima.index', compact('penerima'));
    }

    public function create()
    {
        return view('penerima.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nik' => 'required|unique:penerima,nik|digits:16',
            'alamat_lengkap' => 'required',
            'no_hp' => 'nullable',
            'jenis_kelamin' => 'required',
            'kategori_bantuan' => 'required',
            'tanggal_lahir' => 'required|date',
            'status_ekonomi' => 'required',
        ]);

        Penerima::create($request->all());
        return redirect()->route('penerima.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit(Penerima $penerima)
    {
        return view('penerima.edit', compact('penerima'));
    }

    public function update(Request $request, Penerima $penerima)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nik' => 'required|digits:16|unique:penerima,nik,' . $penerima->id,
            'alamat_lengkap' => 'required',
            'no_hp' => 'nullable',
            'jenis_kelamin' => 'required',
            'kategori_bantuan' => 'required',
            'tanggal_lahir' => 'required|date',
            'status_ekonomi' => 'required',
        ]);

        $penerima->update($request->all());
        return redirect()->route('penerima.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy(Penerima $penerima)
    {
        $penerima->delete();
        return redirect()->route('penerima.index')->with('success', 'Data berhasil dihapus.');
    }
}
