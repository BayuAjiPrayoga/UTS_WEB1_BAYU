<!DOCTYPE html>
<html lang="id" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NextParth - Penerimaan Peserta Didik Baru</title>
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

        .navbar {
            background: linear-gradient(135deg, #7c3aed 0%, #a855f7 100%) !important;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .logo-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 4px;
            width: 32px;
            height: 32px;
        }

        .logo-square {
            width: 14px;
            height: 14px;
            background-color: white;
            border-radius: 3px;
        }

        .navbar-brand {
            color: white !important;
            font-weight: 700;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
        }

        .nav-link:hover,
        .nav-link.active {
            color: white !important;
        }

        .hero-section {
            min-height: 100vh;
            background: linear-gradient(135deg, #7c3aed 0%, #a855f7 100%);
            color: white;
            display: flex;
            align-items: center;
        }

        .btn-outline-custom {
            border: 2px solid white;
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            font-weight: 600;
        }

        .btn-outline-custom:hover {
            background-color: white;
            color: #7c3aed;
        }

        .info-section {
            padding: 5rem 0;
            background-color: #f8f9fa;
        }

        .section-title {
            color: #1f2937;
            font-weight: 700;
            margin-bottom: 3rem;
        }

        .footer {
            background: linear-gradient(135deg, #7c3aed 0%, #a855f7 100%);
            color: white;
            padding: 2rem 0;
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 4rem 0;
            }

            .info-section {
                padding: 3rem 0;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand logo" href="#">
                <div class="logo-grid">
                    <div class="logo-square"></div>
                    <div class="logo-square"></div>
                    <div class="logo-square"></div>
                    <div class="logo-square"></div>
                </div>
                <span>NextParth</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Informasi -->
    <section id="beranda" class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="fw-bold mb-3" style="font-size: 3rem;">Selamat Datang di NextParth</h1>
                    <p class="lead mb-4" style="font-size: 1.25rem; opacity: 0.95;">
                        Sistem Informasi PPDB Modern untuk Pendaftaran Siswa Baru secara cepat dan efisien.
                        Daftarkan diri Anda sekarang dan raih kesempatan terbaik untuk masa depan pendidikan yang
                        cerah.
                    </p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="{{ route('register') }}" class="btn btn-outline-custom btn-lg">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <p class="mb-0 text-center">Copyright by 2355201194_Bayu_TIF RP 23 CNS A</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
