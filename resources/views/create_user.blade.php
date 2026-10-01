@extends('layouts.app')

@section('content')
<style>
    .create-user-page {
        --burgundy: #800020;
        --burgundy-dark: #5c0017;
    }

    .create-user-page h2 {
        color: var(--burgundy);
        font-weight: 700;
    }

    .create-user-page .card {
        border: 1px solid #e5cbd2;
        border-radius: 12px;
    }

    .create-user-page .btn-burgundy {
        background-color: var(--burgundy);
        border-color: var(--burgundy);
        color: #fff;
    }

    .create-user-page .btn-burgundy:hover {
        background-color: var(--burgundy-dark);
        border-color: var(--burgundy-dark);
        color: #fff;
    }
</style>

<div class="container py-5 create-user-page">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow">
                <div class="card-body p-4">
                    <h2 class="mb-4">Buat Pengguna Baru</h2>

                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input
                                type="text"
                                id="nama"
                                name="nama"
                                class="form-control"
                                placeholder="Masukkan nama"
                                value="{{ old('nama') }}"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="npm" class="form-label">NPM</label>
                            <input
                                type="text"
                                id="npm"
                                name="npm"
                                class="form-control"
                                placeholder="Masukkan NPM"
                                value="{{ old('npm') }}"
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="kelas_id" class="form-label">Kelas</label>
                            <select
                                name="kelas_id"
                                id="kelas_id"
                                class="form-select"
                                required>
                                <option value="">Pilih Kelas</option>

                                @foreach ($kelas as $kelasItem)
    <option
        value="{{ $kelasItem->id }}"
        {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}>
        {{ $kelasItem->nama_kelas }}
    </option>
@endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-burgundy">Simpan</button>
                        <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection