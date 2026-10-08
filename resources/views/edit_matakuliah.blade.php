@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h2 class="mb-4">Edit Mata Kuliah</h2>

                    <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="kode_matakuliah" class="form-label">Kode Mata Kuliah</label>
                            <input type="text" id="kode_matakuliah" name="kode_matakuliah" class="form-control @error('kode_matakuliah') is-invalid @enderror" value="{{ old('kode_matakuliah', $matakuliah->kode_matakuliah) }}" required>
                            @error('kode_matakuliah')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nama_matakuliah" class="form-label">Nama Mata Kuliah</label>
                            <input type="text" id="nama_matakuliah" name="nama_matakuliah" class="form-control @error('nama_matakuliah') is-invalid @enderror" value="{{ old('nama_matakuliah', $matakuliah->nama_matakuliah) }}" required>
                            @error('nama_matakuliah')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="sks" class="form-label">SKS</label>
                            <input type="number" id="sks" name="sks" min="1" max="6" class="form-control @error('sks') is-invalid @enderror" value="{{ old('sks', $matakuliah->sks) }}" required>
                            @error('sks')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection