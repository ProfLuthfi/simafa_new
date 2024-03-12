<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }
    public function create()
    {
        return view('rooms.create');
    }

    // Fungsi untuk menyimpan rooms baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_ruangan' => 'required',
            'kapasitas' => 'required|numeric|min:1',
        ]);

        Room::create($request->all());

        return redirect()->route('rooms.index')->with('success', 'Ruangan berhasil ditambahkan.');
    }

    // Fungsi untuk menampilkan form pengeditan rooms
    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    // Fungsi untuk menyimpan perubahan pada rooms
    public function update(Request $request, Room $room)
    {
        $request->validate([
            'nama_ruangan' => 'required',
            'kapasitas' => 'required|numeric|min:1',
        ]);

        $room->update($request->all());

        return redirect()->route('rooms.index')->with('success', 'Ruangan berhasil diperbarui.');
    }

    // Fungsi untuk menghapus rooms
    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('rooms.index')->with('success', 'Ruangan berhasil dihapus.');
    }
}
