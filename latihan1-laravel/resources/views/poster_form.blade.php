<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Lomba Desain Poster</title>
    <!-- Menggunakan font modern dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ff6b6b, #ffb74d, #4caf50); /* Background gradient yang lebih cerah */
            font-family: 'Poppins', sans-serif; /* Font modern */
            animation: fadeIn 1s ease-in-out;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Background transparan dengan opacity lebih tinggi */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            animation: slideIn 0.6s ease-out forwards;
        }

        h2 {
            color: #fab058;
            text-align: center;
            margin-bottom: 20px;
            font-size: 2.5rem;
            animation: slideInText 1s ease-out forwards;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
        }

        .btn-primary {
            background-color: #ff6b6b; /* Warna tombol yang cerah */
            border: none;
            padding: 12px 24px;
            font-size: 1.1rem;
            border-radius: 50px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #ff3b3b; /* Warna tombol saat hover */
            transform: translateY(-3px);
        }

        .form-label {
            font-weight: bold;
            color: #333;
        }

        .form-control {
            border-radius: 8px;
            border: 2px solid #e0e0e0;
            padding: 10px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .form-control:focus {
            border-color: #ff6b6b; /* Border berwarna cerah saat fokus */
            box-shadow: 0 0 8px rgba(255, 107, 107, 0.3);
        }

        .form-control:focus::placeholder {
            color: #ff6b6b; /* Placeholder dengan warna cerah */
        }

        .file-input-container {
            position: relative;
        }

        .file-input-container i {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #6c757d;
        }

        .file-input-container input {
            padding-right: 40px;
        }

        .mb-3 {
            margin-bottom: 1.5rem;
        }

        .file-error {
            color: red;
            font-size: 0.875rem;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(-50px);
            }
            to {
                transform: translateY(0);
            }
        }

        @keyframes slideInText {
            from {
                transform: translateY(-30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .form-control:hover {
            border-color: #ff6b6b; /* Efek hover pada input */
        }

        .form-control:focus {
            border-color: #ff6b6b;
            box-shadow: 0 0 8px rgba(255, 107, 107, 0.3);
        }

    </style>
</head>
<body>

    <div class="container mt-5">
        <h2>Pendaftaran Lomba Desain Poster</h2>
        <form action="/poster/submit" method="post" enctype="multipart/form-data" id="posterForm">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Peserta</label>
                <input type="text" class="form-control" name="name" id="name" required placeholder="Masukkan Nama Peserta">
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">Kelas</label>
                <input type="text" class="form-control" name="class" id="class" required placeholder="Masukkan Kelas">
            </div>
            <div class="mb-3">
                <label for="poster_title" class="form-label">Judul Poster</label>
                <input type="text" class="form-control" name="poster_title" id="poster_title" required placeholder="Masukkan Judul Poster">
            </div>
            <div class="mb-3 file-input-container">
                <label for="poster_file" class="form-label">Upload Poster (JPG/PNG, max 2MB)</label>
                <input type="file" class="form-control" name="poster_file" id="poster_file" required>
                <i class="bi bi-file-earmark-image"></i>
                <div class="file-error" id="fileError"></div>
            </div>
            <button type="submit" class="btn btn-primary w-100">Kirim</button>
        </form>
    </div>

    <script>
        document.getElementById('posterForm').addEventListener('submit', function(event) {
            // Validate file type and size
            var fileInput = document.getElementById('poster_file');
            var file = fileInput.files[0];
            var fileError = document.getElementById('fileError');
            var allowedTypes = ['image/jpeg', 'image/png'];
            var maxSize = 2 * 1024 * 1024; // 2MB

            if (file) {
                // Check file type
                if (!allowedTypes.includes(file.type)) {
                    fileError.textContent = 'Format file harus JPG atau PNG.';
                    event.preventDefault(); // Prevent form submission
                    return;
                }
                // Check file size
                if (file.size > maxSize) {
                    fileError.textContent = 'Ukuran file maksimal 2MB.';
                    event.preventDefault(); // Prevent form submission
                    return;
                }
                // Clear previous error message if validation passes
                fileError.textContent = '';
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
