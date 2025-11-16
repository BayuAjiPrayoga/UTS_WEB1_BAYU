<!DOCTYPE html>
<html lang="id" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - NextParth</title>
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

        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-left: 4px solid #7c3aed;
        }

        .stat-card.success {
            border-left-color: #10b981;
        }

        .stat-card.danger {
            border-left-color: #ef4444;
        }

        .stat-card.warning {
            border-left-color: #f59e0b;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: #1f2937;
        }

        .stat-label {
            color: #6b7280;
            font-size: 0.9rem;
        }

        .table-card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .badge-status {
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 500;
        }

        .badge-success {
            background-color: #d1fae5;
            color: #065f46;
        }

        .badge-danger {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .badge-warning {
            background-color: #fef3c7;
            color: #92400e;
        }

        .btn-status {
            padding: 0.25rem 0.75rem;
            border-radius: 6px;
            border: none;
            font-size: 0.85rem;
            font-weight: 500;
            cursor: pointer;
        }

        .btn-accept {
            background-color: #10b981;
            color: white;
        }

        .btn-reject {
            background-color: #ef4444;
            color: white;
        }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand logo" href="{{ route('admin.dashboard') }}">
                <div class="logo-grid">
                    <div class="logo-square"></div>
                    <div class="logo-square"></div>
                    <div class="logo-square"></div>
                    <div class="logo-square"></div>
                </div>
                <span>NextParth Admin</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.dashboard') }}">Dashboard</a>
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
            <h1 class="mb-0">Dashboard Admin</h1>
            <p class="mb-0 mt-2 opacity-75">Kelola pendaftaran siswa baru</p>
        </div>
    </div>

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- STATISTICS -->
        <div class="row g-4 mb-4">
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-number">{{ $totalSiswa }}</div>
                    <div class="stat-label">Total Siswa</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card success">
                    <div class="stat-number">{{ $diterima }}</div>
                    <div class="stat-label">Diterima</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card danger">
                    <div class="stat-number">{{ $ditolak }}</div>
                    <div class="stat-label">Ditolak</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card warning">
                    <div class="stat-number">{{ $pending }}</div>
                    <div class="stat-label">Pending</div>
                </div>
            </div>
        </div>

        <!-- TABLE -->
        <div class="table-card">
            <h4 class="mb-4">Daftar Pendaftar</h4>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $index => $user)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if ($user->status == 'Diterima')
                                        <span class="badge-status badge-success">Diterima</span>
                                    @elseif ($user->status == 'Ditolak')
                                        <span class="badge-status badge-danger">Ditolak</span>
                                    @else
                                        <span class="badge-status badge-warning">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary me-2" data-bs-toggle="modal"
                                        data-bs-target="#detailModal-{{ $user->id }}">
                                        <i class="bi bi-eye-fill"></i> Lihat
                                    </button>
                                    @if ($user->status == 'Pending')
                                        <form method="POST" action="{{ route('admin.update-status', $user->id) }}"
                                            class="d-inline">
                                            @csrf
                                            <button type="submit" name="status" value="Diterima"
                                                class="btn-status btn-accept me-2">Terima</button>
                                            <button type="submit" name="status" value="Ditolak"
                                                class="btn-status btn-reject">Tolak</button>
                                        </form>
                                    @else
                                        {{-- {{ route('admin.update-status', $user->id) }} --}}
                                        <form method="POST" action="#" class="d-inline">
                                            @csrf
                                            <button type="submit" name="status" value="Diterima"
                                                class="btn-status btn-accept me-2">Terima</button>
                                            <button type="submit" name="status" value="Ditolak"
                                                class="btn-status btn-reject me-2">Tolak</button>
                                            <button type="submit" name="status" value="Pending"
                                                class="btn-status btn-warning">Reset</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                            <div class="modal fade" id="detailModal-{{ $user->id }}" tabindex="-1"
                                aria-labelledby="detailModalLabel-{{ $user->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="detailModalLabel-{{ $user->id }}">Detail
                                                Pendaftar — {{ $user->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Tutup"></button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="row g-3">
                                                <div class="col-md-4 text-center">

                                                    @if (!empty($user->foto_ijazah) && file_exists(public_path('storage/' . $user->foto_ijazah)))
                                                        <img src="{{ asset('storage/' . $user->foto_ijazah) }}"
                                                            alt="Foto Ijazah {{ $user->name }}"
                                                            class="img-fluid rounded shadow"
                                                            style="max-height:260px; object-fit:cover;">
                                                    @else
                                                        <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                                            style="height:260px;">
                                                            <span class="text-muted">Tidak ada foto</span>
                                                        </div>
                                                    @endif

                                                    <p class="mt-3 mb-0 fw-semibold">{{ $user->name }}</p>
                                                    <small class="text-muted">{{ $user->email }}</small>

                                                </div>


                                                <div class="col-md-8">
                                                    <h6 class="mb-3">Informasi Pendaftaran</h6>

                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item d-flex justify-content-between">
                                                            <span>Nama</span>
                                                            <span class="fw-semibold">{{ $user->name }}</span>
                                                        </li>

                                                        <li class="list-group-item d-flex justify-content-between">
                                                            <span>Email</span>
                                                            <span class="fw-semibold">{{ $user->email }}</span>
                                                        </li>

                                                        <li class="list-group-item d-flex justify-content-between">
                                                            <span>Nilai Rata-rata</span>
                                                            <span
                                                                class="fw-semibold">{{ $user->nilai_rata_rata ?? ($user->nilai_rapor ?? '-') }}</span>
                                                        </li>

                                                        <li class="list-group-item d-flex justify-content-between">
                                                            <span>Status</span>
                                                            <span class="fw-semibold">{{ $user->status }}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data pendaftar</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
