<?php

namespace App\Http\Controllers;

use App\Models\ListIzin;
use Illuminate\Http\Request;

class ListIzinController extends Controller
{
    public function index(Request $request)
    {
        $data = ListIzin::query()
            ->when($request->search, function ($query, $search) {
                $query->where('Nama_Perusahaan', 'like', "%{$search}%")
                      ->orWhere('Nib', 'like', "%{$search}%")
                      ->orWhere('Uraian_Jenis_Perizinan', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('list-izin.index', compact('data'));
    }

    public function store(Request $request)
    {
        ListIzin::create($request->only((new ListIzin)->getFillable()));

        return redirect()->route('list-izin.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show(ListIzin $listIzin)
    {
        return view('list-izin.show', compact('listIzin'));
    }

    public function update(Request $request, ListIzin $listIzin)
    {
        $listIzin->update($request->only($listIzin->getFillable()));

        return redirect()->route('list-izin.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(ListIzin $listIzin)
    {
        $listIzin->delete();

        return redirect()->route('list-izin.index')->with('success', 'Data berhasil dihapus.');
    }
}