@extends('layouts.app')

@section('content')
<style>
    .user-page {
        --burgundy: #800020;
        --burgundy-dark: #5c0017;
    }

    .user-page h2 {
        color: var(--burgundy);
        font-weight: 700;
    }

    .user-page .btn-burgundy {
        background-color: var(--burgundy);
        border-color: var(--burgundy);
        color: #fff;
    }

    .user-page .btn-burgundy:hover {
        background-color: var(--burgundy-dark);
        border-color: var(--burgundy-dark);
        color: #fff;
    }

    .user-page .card {
        border: 1px solid #e5cbd2;
        border-radius: 12px;
        overflow: hidden;
    }

    .user-page thead th {
        background-color: var(--burgundy);
        color: #fff;
    }
</style>

<div class="container py-5 user-page">
    <h2 class="mb-4">Daftar Pengguna</h2>

    <a href="{{ route('user.create') }}" class="btn btn-burgundy mb-4">
        Tambah User
    </a>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-hover mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->nama }}</td>
                            <td>{{ $user->nim }}</td>
                            <td>{{ $user->nama_kelas }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">
                                Belum ada data pengguna.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection