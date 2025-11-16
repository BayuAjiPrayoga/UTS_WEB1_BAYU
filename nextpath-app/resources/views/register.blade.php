<!DOCTYPE html>
<html lang="id" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - NextPath</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }

        .register-container {
            min-height: 100vh;
            display: flex;
        }

        .left-section {
            flex: 1;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 3rem;
        }

        .right-section {
            flex: 1;
            background: linear-gradient(135deg, #7c3aed 0%, #a855f7 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 3rem;
        }

        .logo-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 4px;
            width: 40px;
            height: 40px;
        }

        .logo-square {
            width: 18px;
            height: 18px;
            background-color: #7c3aed;
            border-radius: 3px;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1f2937;
        }

        .welcome-title {
            font-size: 2rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 0.5rem;
        }

        .welcome-subtitle {
            color: #6b7280;
            margin-bottom: 2.5rem;
        }

        .form-label {
            font-weight: 500;
            color: #374151;
            margin-bottom: 0.5rem;
        }

        .form-control {
            border: 1px solid #d1d5db;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            font-size: 1rem;
        }

        .form-control:focus {
            border-color: #7c3aed;
            box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.1);
        }

        .btn-signup {
            background-color: #7c3aed;
            border: none;
            color: white;
            padding: 0.75rem;
            border-radius: 8px;
            font-weight: 600;
            width: 100%;
            margin-bottom: 1rem;
        }

        .btn-signup:hover {
            background-color: #6d28d9;
        }

        .btn-google {
            background-color: white;
            border: 1px solid #d1d5db;
            color: #374151;
            padding: 0.75rem;
            border-radius: 8px;
            font-weight: 500;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .btn-google:hover {
            background-color: #f9fafb;
        }

        .google-icon {
            width: 20px;
            height: 20px;
        }

        .login-link {
            text-align: center;
            margin-top: 1.5rem;
            color: #6b7280;
        }

        .login-link a {
            color: #7c3aed;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .illustration-container {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .illustration-icons {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .icon-item {
            position: absolute;
            color: rgba(255, 255, 255, 0.3);
            font-size: 2rem;
        }

        .main-figure {
            position: absolute;
            bottom: 10%;
            right: 10%;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
        }

        .progress-bar {
            position: absolute;
            bottom: 5%;
            left: 5%;
            background: rgba(255, 255, 255, 0.2);
            padding: 1rem 1.5rem;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .progress-check {
            width: 30px;
            height: 30px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #7c3aed;
            font-weight: bold;
        }

        .progress-dots {
            display: flex;
            gap: 0.5rem;
        }

        .progress-dot {
            width: 8px;
            height: 8px;
            background: white;
            border-radius: 50%;
        }

        @media (max-width: 992px) {
            .register-container {
                flex-direction: column;
            }

            .right-section {
                display: none;
            }

            .left-section {
                padding: 2rem;
            }
        }
    </style>
</head>

<body>
    <div class="register-container">
        <!-- Form registerna -->
        <div class="left-section">
            <div class="logo">
                <div class="logo-grid">
                    <div class="logo-square"></div>
                    <div class="logo-square"></div>
                    <div class="logo-square"></div>
                    <div class="logo-square"></div>
                </div>
                <span class="logo-text">NextPath</span>
            </div>

            <div class="welcome-title">Membuat akun</div>
            <div class="welcome-subtitle">Memebuat akun dan mendaftar sekolah</div>

            <form method="POST" action="{{ route('pendaftaran.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                        name="password" required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nilai_rata_rata" class="form-label">Nilai Rata-rata</label>
                    <input type="number" class="form-control" id="nilai_rata_rata" name="nilai_rata_rata" required>
                </div>

                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Masukan Foto Ijazah SMP/MTS/IT</label>
                    <input class="form-control" name="foto_ijazah" type="file" id="formFileMultiple">
                </div>

                <button type="submit" class="btn btn-signup">Daftar</button>
            </form>

            <div class="login-link">
                Sudah memiliki akun? <a href="{{ route('login') }}">Sign in</a>
            </div>
        </div>

        <!-- Gambar sebelah kanan -->
        <div class="right-section">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script></script>
</body>

</html>
