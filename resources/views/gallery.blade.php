<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Sistem Informasi</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/mahasiswa">Data Mahasiswa</a></li>
                    <li class="nav-item"><a class="nav-link" href="/dosen">Data Dosen</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/gallery">Gallery</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="container text-center mt-4">
        <h1>Gallery</h1>
        <div class="row mt-3">
            @foreach ($gallery as $gambar)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="{{ $gambar }}" class="card-img-top" alt="gambar">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container text-center">
            Sistem Informasi Mahasiswa | Copyright © {{ date("Y") }}
        </div>
    </footer>
</body>
</html>
