<?php

namespace App\Http\Controllers;

use App\Models\NIB;
use Illuminate\Http\Request;

class NIBController extends Controller
{
    public function index(Request $request)
    {
        $data = NIB::query()
            ->when($request->search, function ($query, $search) {
                $query->where('Nama_Perusahaan', 'like', "%{$search}%")
                      ->orWhere('NIB', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('nib.index', compact('data'));
    }

    public function store(Request $request)
    {
        NIB::create($request->only((new NIB)->getFillable()));

        return redirect()->route('nib.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show(NIB $nib)
    {
        return view('nib.show', compact('nib'));
    }

    public function update(Request $request, NIB $nib)
    {
        $nib->update($request->only($nib->getFillable()));

        return redirect()->route('nib.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(NIB $nib)
    {
        $nib->delete();

        return redirect()->route('nib.index')->with('success', 'Data berhasil dihapus.');
    }
}