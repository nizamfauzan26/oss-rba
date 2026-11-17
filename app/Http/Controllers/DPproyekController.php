<?php

namespace App\Http\Controllers;

use App\Models\DPproyek;
use Illuminate\Http\Request;

class DPproyekController extends Controller
{
    public function index(Request $request)
    {
        $data = DPproyek::query()
            ->when($request->search, function ($query, $search) {
                $query->where('Nama_Perusahaan', 'like', "%{$search}%")
                      ->orWhere('Nib', 'like', "%{$search}%")
                      ->orWhere('Nama_Proyek', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('dpproyek.index', compact('data'));
    }

    public function store(Request $request)
    {
        DPproyek::create($request->only((new DPproyek)->getFillable()));

        return redirect()->route('dpproyek.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show(DPproyek $dpproyek)
    {
        return view('dpproyek.show', compact('dpproyek'));
    }

    public function update(Request $request, DPproyek $dpproyek)
    {
        $dpproyek->update($request->only($dpproyek->getFillable()));

        return redirect()->route('dpproyek.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(DPproyek $dpproyek)
    {
        $dpproyek->delete();

        return redirect()->route('dpproyek.index')->with('success', 'Data berhasil dihapus.');
    }
}