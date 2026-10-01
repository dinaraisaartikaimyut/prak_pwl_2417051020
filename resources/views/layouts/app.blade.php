<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Pemrograman Web Lanjut' }}</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

    {{-- Konten halaman --}}
    <main class="flex-grow-1">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-dark text-white mt-5">
        <div class="container py-4">

            <div class="row">

                <div class="col-md-6">
                    <h5 class="fw-bold">
                        Pemrograman Web Lanjut
                    </h5>

                    <p class="mb-0">
                        Sistem Informasi Data Pengguna
                    </p>
                </div>

                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                    <p class="mb-1">
                        Dinar Aisa Artika
                    </p>

                    <p class="mb-0">
                        NPM: 2417051020
                    </p>
                </div>

            </div>

            <hr>

            <div class="text-center">
                <small>
                    &copy; {{ date('Y') }} Pemrograman Web Lanjut.
                    All Rights Reserved.
                </small>
            </div>

        </div>
    </footer>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>