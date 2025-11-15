<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NextParth - Penerimaan Peserta Didik Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">NextParth</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#informasi">Informasi</a></li>
                <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="register.html">Registrasi</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="bg-light py-5">
    <div class="container text-center">
        <h1 class="fw-bold">Selamat Datang di NextParth</h1>
        <p class="lead mt-3">
            Sistem Informasi PPDB Modern untuk Pendaftaran Siswa Baru secara cepat dan efisien.
        </p>
        <a href="register.html" class="btn btn-primary btn-lg mt-3">Daftar Sekarang</a>
    </div>
</section>

<!-- INFORMASI -->
<section id="informasi" class="py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-4">Informasi Terkini</h2>

        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="https://source.unsplash.com/600x400?school" class="card-img-top" alt="info">
                    <div class="card-body">
                        <h5 class="card-title">Pendaftaran Gelombang 1 Dibuka</h5>
                        <p class="card-text">Pendaftaran siswa baru untuk gelombang pertama resmi dibuka mulai tanggal 1 Juli.</p>
                        <a href="detail-info.html" class="btn btn-primary btn-sm">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="https://source.unsplash.com/600x400?class" class="card-img-top" alt="info">
                    <div class="card-body">
                        <h5 class="card-title">Syarat Pendaftaran Tahun Ini</h5>
                        <p class="card-text">Beberapa syarat administrasi wajib dipenuhi calon peserta didik baru.</p>
                        <a href="detail-info.html" class="btn btn-primary btn-sm">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="https://source.unsplash.com/600x400?students" class="card-img-top" alt="info">
                    <div class="card-body">
                        <h5 class="card-title">Jadwal Tes Seleksi</h5>
                        <p class="card-text">Tes seleksi meliputi ujian akademik dan wawancara akan dilaksanakan sesuai jadwal.</p>
                        <a href="detail-info.html" class="btn btn-primary btn-sm">Selengkapnya</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-primary text-white text-center py-3 mt-5">
    @Copyright by 2355201194_Bayu_TIF RP 23 CNS A
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
