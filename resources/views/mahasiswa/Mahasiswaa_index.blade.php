<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .foto {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin: 10px;
            border: 3px solid #ddd;
        }
    </style>
</head>
<body class="text-center">

<div class="container mt-5">
    <h2>Daftar Mahasiswa</h2>
    
    <div class="list-group mt-3">
        @foreach($mahasiswa as $mhs)
            <div class="list-group-item">{{ $mhs['nama'] }}</div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-4 flex-wrap">
        @foreach($mahasiswa as $mhs)
            <img src="{{ asset('images/'.$mhs['foto']) }}" alt="{{ $mhs['nama'] }}" class="foto">
        @endforeach
    </div>

    <p class="mt-3">Copyright © 2023 Duniailkom</p>
</div>

</body>
</html>
