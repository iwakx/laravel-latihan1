<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Lomba Desain Poster</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Pendaftaran Lomba Desain Poster</h2>
        <form action="/poster/submit" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Peserta</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">Kelas</label>
                <input type="text" class="form-control" name="class" required>
            </div>
            <div class="mb-3">
                <label for="poster_title" class="form-label">Judul Poster</label>
                <input type="text" class="form-control" name="poster_title" required>
            </div>
            <div class="mb-3">
                <label for="poster_file" class="form-label">Upload Poster (JPG/PNG, max 2MB)</label>
                <input type="file" class="form-control" name="poster_file" required>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</body>
</html>