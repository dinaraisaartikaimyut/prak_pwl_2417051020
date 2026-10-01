<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    protected $matakuliahModel;

    public function __construct()
    {
        $this->matakuliahModel = new Matakuliah();
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
            'kode_matakuliah' => 'required|string|max:20',
            'nama_matakuliah' => 'required|string|max:255',
            'sks' => 'required|integer|min:1',
        ]);

        $this->matakuliahModel->create([
            'kode_matakuliah' => $request->input('kode_matakuliah'),
            'nama_matakuliah' => $request->input('nama_matakuliah'),
            'sks' => $request->input('sks'),
        ]);

        return redirect()->route('matakuliah.index');
    }
}
