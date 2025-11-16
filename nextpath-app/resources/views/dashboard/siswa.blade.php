<!DOCTYPE html>
<html lang="id" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Siswa - NextParth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
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

        .dashboard-header {
            background: linear-gradient(135deg, #7c3aed 0%, #a855f7 100%);
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
        }

        .status-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .status-icon {
            font-size: 4rem;
            margin-bottom: 1rem;
        }

        .status-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .status-message {
            color: #6b7280;
            margin-bottom: 1.5rem;
        }

        .status-badge {
            display: inline-block;
            padding: 0.75rem 2rem;
            border-radius: 25px;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .status-badge.success {
            background-color: #d1fae5;
            color: #065f46;
        }

        .status-badge.danger {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .status-badge.warning {
            background-color: #fef3c7;
            color: #92400e;
        }

        .info-card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
        }

        .info-card h5 {
            color: #1f2937;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            padding: 0.75rem 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-label {
            color: #6b7280;
            font-weight: 500;
        }

        .info-value {
            color: #1f2937;
            font-weight: 600;
        }

        .btn-primary-custom {
            background-color: #7c3aed;
            border: none;
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            font-weight: 600;
        }

        .btn-primary-custom:hover {
            background-color: #6d28d9;
            color: white;
        }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand logo" href="{{ route('siswa.dashboard') }}">
                <div class="logo-grid">
                    <div class="logo-square"></div>
                    <div class="logo-square"></div>
                    <div class="logo-square"></div>
                    <div class="logo-square"></div>
                </div>
                <span>NextParth</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('siswa.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- DASHBOARD HEADER -->
    <div class="dashboard-header">
        <div class="container">
            <h1 class="mb-0">Dashboard Siswa</h1>
            <p class="mb-0 mt-2 opacity-75">Selamat datang, {{ $user->name }}</p>
        </div>
    </div>

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- STATUS CARD -->
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto">
                <div class="status-card">
                    @if ($user->status == 'Diterima')
                        <div class="status-icon">✅</div>
                        <div class="status-title text-success">Selamat! Anda Diterima</div>
                        <div class="status-message">Anda telah diterima sebagai siswa baru di sekolah kami.</div>
                        <span class="status-badge success">DITERIMA</span>
                    @elseif ($user->status == 'Ditolak')
                        <div class="status-icon">❌</div>
                        <div class="status-title text-danger">Maaf, Anda Ditolak</div>
                        <div class="status-message">Mohon maaf, pendaftaran Anda tidak dapat diterima pada saat ini.
                        </div>
                        <span class="status-badge danger">DITOLAK</span>
                    @else
                        <div class="status-icon">⏳</div>
                        <div class="status-title text-warning">Status Pending</div>
                        <div class="status-message">Pendaftaran Anda sedang dalam proses review. Harap tunggu
                            konfirmasi dari admin.</div>
                        <span class="status-badge warning">PENDING</span>
                    @endif
                </div>
            </div>
        </div>

        <!-- INFO CARD -->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="info-card">
                    <h5><i class="bi bi-person-circle me-2"></i>Informasi Akun</h5>
                    <div class="info-item">
                        <span class="info-label">Nama Lengkap</span>
                        <span class="info-value">{{ $user->name }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Email</span>
                        <span class="info-value">{{ $user->email }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Status Pendaftaran</span>
                        <span class="info-value">
                            @if ($user->status == 'Diterima')
                                <span class="badge bg-success">Diterima</span>
                            @elseif ($user->status == 'Ditolak')
                                <span class="badge bg-danger">Ditolak</span>
                            @else
                                <span class="badge bg-warning">Pending</span>
                            @endif
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
