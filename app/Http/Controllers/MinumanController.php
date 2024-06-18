<?php

namespace App\Http\Controllers;

use App\Models\Minuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class MinumanController extends Controller
{
    public function index()
    {
        $minumans = Minuman::all();
        $title = "Minuman";
        return view('admin.minuman.index', compact('minumans', 'title'));
    }

    public function create()
    {
        $categories = ['Signature Coffee', 'Coffee Based', 'Hand Drip Coffee', 'Signature Mocktail', 'Treat Yourself', 'Non Coffee based','Tea Based'];
        $title = "Minuman";
        return view('admin.minuman.create', compact('categories', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'gambar' => 'required|image|max:2048',
            'kategori' => 'required|in:Signature Coffee,Coffee Based,Hand Drip Coffee,Signature Mocktail,Treat Yourself,Non Coffee based,Tea Based'
        ]);

        $path = $request->file('gambar')->store('public/images');

        Minuman::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('adminminuman.index')->with('success', 'Minuman created successfully.');
    }

    public function show($id)
    {
        $minuman = Minuman::findOrFail($id);
        $title = "Minuman";
        return view('admin.minuman.show', compact('minuman', 'title'));
    }

    public function edit($id)
    {
        $minuman = Minuman::findOrFail($id);
        $title = "Minuman";
        $categories = ['Signature Coffee', 'Coffee Based', 'Hand Drip Coffee', 'Signature Mocktail', 'Treat Yourself', 'Non Coffee based','Tea Based'];
        return view('admin.minuman.edit', compact('minuman', 'categories', 'title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'gambar' => 'image|max:2048',
            'kategori' => 'required|in:Signature Coffee,Coffee Based,Hand Drip Coffee,Signature Mocktail,Treat Yourself,Non Coffee based,Tea Based'
        ]);

        $minuman = Minuman::findOrFail($id);

        if ($request->hasFile('gambar')) {
            Storage::delete($minuman->gambar);
            $path = $request->file('gambar')->store('public/images');
        } else {
            $path = $minuman->gambar;
        }

        $minuman->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('adminminuman.index')->with('success', 'Minuman updated successfully.');
    }

    public function destroy($id)
    {
        $minuman = Minuman::findOrFail($id);

        Log::info('Attempting to delete Minuman with ID: ' . $minuman->id);
        
        if ($minuman->gambar) {
            Log::info('Image path: ' . $minuman->gambar);
            Storage::delete($minuman->gambar);
        } else {
            Log::info('No image to delete');
        }
        
        $minuman->delete();
        Log::info('Minuman deleted successfully with ID: ' . $minuman->id);
        
        return redirect()->route('adminminuman.index')->with('success', 'Minuman deleted successfully.');
    }

    public function showMenu()
    {
        $minumans = Minuman::all()->groupBy('kategori'); 
        return view('main.minuman', compact('minumans'));
    }
}
