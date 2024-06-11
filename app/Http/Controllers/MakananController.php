<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class MakananController extends Controller
{
    public function index()
    {
        $makanans = Makanan::all();
        $title = 'Daftar Makanan'; 
        return view('admin.makanan.index', compact('makanans', 'title'));
    }

    public function create()
    {
        $title = 'Tambah Makanan';
    $categories = ["Maincourse", "Pasta", "Bowl Series", "French Fries Series", "Finger Food", "Sweet"];
    return view('admin.makanan.create', compact('title', 'categories'));
        
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'harga' => 'required|numeric',
        'deskripsi' => 'required|string',
        'gambar' => 'nullable|image|max:2048',
        'kategori' => 'required|string|max:255',
    ]);

    if ($request->hasFile('gambar')) {
        $path = $request->file('gambar')->store('public/images');
        Log::info('Gambar path: ' . $path);
        $validatedData['gambar'] = basename($path);
    }

    Makanan::create($validatedData);

    return redirect()->route('adminmakanan.index')->with('success', 'Makanan berhasil ditambahkan.');
}


    public function show(Makanan $makanan)
    {
        $title = 'Detail Makanan';
        return view('admin.makanan.show', compact('makanan' , 'title'));
    }

    public function edit(Makanan $makanan)
    {
        $title = 'Edit Makanan';
        $categories = ["Maincourse", "Pasta", "Bowl Series", "French Fries Series", "Finger Food", "Sweet"];
        return view('admin.makanan.edit', compact('makanan', 'title', 'categories'));
    }

    public function update(Request $request, Makanan $makanan)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|max:2048',
            'kategori' => 'required|string|max:255',
        ]);

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('public/images');
            $validatedData['gambar'] = basename($path);
        }

        $makanan->update($validatedData);

        return redirect()->route('adminmakanan.index')->with('success', 'Makanan berhasil diperbarui.');
    }

    public function destroy(Makanan $makanan)
{
    Log::info('Trying to delete makanan with ID: ' . $makanan->id);

    if ($makanan->gambar) {
        Storage::disk('public')->delete($makanan->gambar);
    }
    $makanan->delete();
    return redirect()->route('adminmakanan.index')->with('success', 'Makanan berhasil dihapus.');
}
}
