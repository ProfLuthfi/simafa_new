<?php

namespace App\Http\Controllers;

use App\Models\Fasilita;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilita::all();
        return view('fasilitas.index', compact('fasilitas'));
    }
    public function create()
    {
        return view('fasilitas.create');
    }

    // Fungsi untuk menyimpan rooms baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_fasilitas'    => 'required',
            'kondisi'           => 'required',
            'kapasitas'         => 'required|numeric',
            'pj_fasilitas'      => 'required',
            'no_telepon'        => 'required',
        ]);

        Fasilita::create($request->all());

        return redirect()->route('rooms.index')->with('success', 'Fasilitas berhasil ditambahkan.');
    }

    // Fungsi untuk menampilkan form pengeditan rooms
    public function edit(Fasilita $fasilita)
    {
        return view('fasilitas.edit', compact('fasilitas'));
    }

    // Fungsi untuk menyimpan perubahan pada rooms
    public function update(Request $request, Fasilita $fasilita)
    {
        $request->validate([
            'nama_fasilitas'    => 'required',
            'alamat'            => 'required',
            'kondisi'           => 'required',
            'kapasitas'         => 'required|numeric',
            'pj_fasilitas'      => 'required',
            'no_telepon'        => 'required',
        ]);

        $fasilita->update($request->all());

        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil diperbarui.');
    }

    // Fungsi untuk menghapus rooms
    public function destroy(Fasilita $fasilita)
    {
        $fasilita->delete();

        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil dihapus.');
    }
}
