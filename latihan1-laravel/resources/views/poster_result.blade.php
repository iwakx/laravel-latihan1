<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Hasil Pendaftaran</h2>
        <p><strong>Nama:</strong> {{ $data['name'] }}</p>
        <p><strong>Kelas:</strong> {{ $data['class'] }}</p>
        <p><strong>Judul Poster:</strong> {{ $data['poster_title'] }}</p>
        <p><strong>Poster:</strong></p>
        <img src="{{ asset('storage/' . $data['poster_path']) }}" width="300" alt="Poster">
    </div>
</body>
</html>