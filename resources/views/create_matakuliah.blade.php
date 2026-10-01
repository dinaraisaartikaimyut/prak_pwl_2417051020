@extends('layouts.app')

@section('content')
<style>
    .create-mk-page {
        --burgundy: #800020;
        --burgundy-dark: #5c0017;
    }

    .create-mk-page h2 {
        color: var(--burgundy);
        font-weight: 700;
    }

    .create-mk-page .card {
        border: 1px solid #e5cbd2;
        border-radius: 12px;
    }

    .create-mk-page .btn-burgundy {
        background-color: var(--burgundy);
        border-color: var(--burgundy);
        color: #fff;
    }

    .create-mk-page .btn-burgundy:hover {
        background-color: var(--burgundy-dark);
        border-color: var(--burgundy-dark);
        color: #fff;
    }
</style>

<div class="container py-5 create-mk-page">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow">
                <div class="card-body p-4">
                    <h2 class="mb-4">Tambah Mata Kuliah</h2>

                    <form action="{{ route('matakuliah.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="kode_matakuliah" class="form-label">Kode Mata Kuliah</label>
                            <input
                                type="text"
                                id="kode_matakuliah"
                                name="kode_matakuliah"
                                class="form-control"
                                placeholder="Masukkan kode mata kuliah"
                                value="{{ old('kode_matakuliah') }}"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="nama_matakuliah" class="form-label">Nama Mata Kuliah</label>
                            <input
                                type="text"
                                id="nama_matakuliah"
                                name="nama_matakuliah"
                                class="form-control"
                                placeholder="Masukkan nama mata kuliah"
                                value="{{ old('nama_matakuliah') }}"
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="sks" class="form-label">SKS</label>
                            <input
                                type="number"
                                id="sks"
                                name="sks"
                                class="form-control"
                                min="1"
                                value="{{ old('sks') }}"
                                required>
                        </div>

                        <button type="submit" class="btn btn-burgundy">Simpan</button>
                        <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
