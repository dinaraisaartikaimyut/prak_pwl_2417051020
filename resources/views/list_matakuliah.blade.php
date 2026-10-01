@extends('layouts.app')

@section('content')
<style>
    .matakuliah-page {
        --burgundy: #800020;
        --burgundy-dark: #5c0017;
    }

    .matakuliah-page h2 {
        color: var(--burgundy);
        font-weight: 700;
    }

    .matakuliah-page .btn-burgundy {
        background-color: var(--burgundy);
        border-color: var(--burgundy);
        color: #fff;
    }

    .matakuliah-page .btn-burgundy:hover {
        background-color: var(--burgundy-dark);
        border-color: var(--burgundy-dark);
        color: #fff;
    }

    .matakuliah-page .card {
        border: 1px solid #e5cbd2;
        border-radius: 12px;
        overflow: hidden;
    }

    .matakuliah-page thead th {
        background-color: var(--burgundy);
        color: #fff;
    }
</style>

<div class="container py-5 matakuliah-page">
    <h2 class="mb-4">Daftar Mata Kuliah</h2>

    <a href="{{ route('matakuliah.create') }}" class="btn btn-burgundy mb-4">
        Tambah Mata Kuliah
    </a>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-hover mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode</th>
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($matakuliah as $mk)
                        <tr>
                            <td>{{ $mk->id }}</td>
                            <td>{{ $mk->kode_matakuliah }}</td>
                            <td>{{ $mk->nama_matakuliah }}</td>
                            <td>{{ $mk->sks }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">
                                Belum ada data mata kuliah.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
