<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MatakuliahController extends Controller
{
    protected $matakuliahModel;

    public function __construct()
    {
        $this->matakuliahModel = new Matakuliah;
    }

    public function index()
    {
        $matakuliah = $this->matakuliahModel->getAllMK();

        return view('list_matakuliah', [
            'title' => 'Daftar Mata Kuliah',
            'matakuliah' => $matakuliah,
        ]);
    }

    public function create()
    {
        return view('create_matakuliah', [
            'title' => 'Create Mata Kuliah',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required|string|max:20|unique:mata_kuliah,kode_matakuliah',
            'nama_matakuliah' => 'required|string|max:255',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        $this->matakuliahModel->create([
            'kode_matakuliah' => $request->input('kode_matakuliah'),
            'nama_matakuliah' => $request->input('nama_matakuliah'),
            'sks' => $request->input('sks'),
        ]);

        return redirect()->route('matakuliah.index')->with('success', 'Mata kuliah berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        return view('edit_matakuliah', [
            'title' => 'Edit Mata Kuliah',
            'matakuliah' => $this->matakuliahModel->findOrFail($id),
        ]);
    }

    public function update(Request $request, string $id)
    {
        $matakuliah = $this->matakuliahModel->findOrFail($id);

        $validated = $request->validate([
            'kode_matakuliah' => [
                'required',
                'string',
                'max:20',
                Rule::unique('mata_kuliah', 'kode_matakuliah')->ignore($matakuliah->id),
            ],
            'nama_matakuliah' => 'required|string|max:255',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        $matakuliah->update($validated);

        return redirect()->route('matakuliah.index')->with('success', 'Mata kuliah berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $this->matakuliahModel->findOrFail($id)->delete();

        return redirect()->route('matakuliah.index')->with('success', 'Mata kuliah berhasil dihapus.');
    }
}
