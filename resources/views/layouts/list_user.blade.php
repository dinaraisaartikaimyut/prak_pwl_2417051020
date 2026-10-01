@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">
                Daftar Pengguna
            </h2>

            <p class="text-muted mb-0">
                Data pengguna yang tersimpan di dalam sistem.
            </p>
        </div>

        <a
            href="{{ route('user.create') }}"
            class="btn btn-dark">
            + Tambah User
        </a>

    </div>

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-dark">

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

                                <td>
                                    {{ $user->id }}
                                </td>

                                <td>
                                    {{ $user->nama }}
                                </td>

                                <td>
                                    {{ $user->nim }}
                                </td>

                                <td>
                                    {{ $user->nama_kelas }}
                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="4"
                                    class="text-center py-4">

                                    Belum ada data pengguna.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection