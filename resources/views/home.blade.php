@extends('layouts.main')

@section('title', 'Home')

@section('content')

<div class="container">

    <section class="hero-panel p-4 p-md-5 mb-4 text-white">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <div class="hero-eyebrow mb-3">
                    <i class="bi bi-stars"></i>
                    Portal Akademik Jurusan TI
                </div>

                <h1 class="display-5 fw-bold mb-3">
                    Sistem Informasi Mahasiswa
                </h1>

                <p class="lead text-white-75 mb-0">
                    Dashboard kampus untuk mengelola data mahasiswa, dosen, dan program studi
                    dengan alur kerja yang rapi dan cepat.
                </p>

                <div class="d-flex flex-column flex-sm-row gap-2 mt-4">
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-light btn-lg">
                        <i class="bi bi-table me-2"></i>Lihat Data Mahasiswa
                    </a>

                    <a href="{{ route('mahasiswa.create') }}" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-plus-circle me-2"></i>Tambah Mahasiswa
                    </a>
                </div>
            </div>

            <div class="col-lg-5 text-center">
                <div class="hero-visual mx-auto">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png"
                         class="img-fluid p-4"
                         width="230"
                         alt="Mahasiswa">
                </div>
            </div>
        </div>
    </section>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card quick-card border-0 h-100">
                <div class="card-body p-4">
                    <div class="stat-logo stat-logo-primary">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>

                    <div>
                        <h4 class="mb-2">Total Mahasiswa</h4>
                        <p class="text-muted mb-0">
                            Kelola seluruh data mahasiswa dengan tampilan tabel yang nyaman dibaca.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card quick-card border-0 h-100">
                <div class="card-body p-4">
                    <div class="stat-logo stat-logo-success">
                        <i class="bi bi-journal-bookmark-fill"></i>
                    </div>

                    <div>
                        <h4 class="mb-2">Program Studi</h4>
                        <p class="text-muted mb-0">
                            Pantau program studi yang digunakan pada data mahasiswa dan dosen.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card quick-card border-0 h-100">
                <div class="card-body p-4">
                    <div class="stat-logo stat-logo-danger">
                        <i class="bi bi-lightning-charge-fill"></i>
                    </div>

                    <div>
                        <h4 class="mb-2">Laravel CRUD</h4>
                        <p class="text-muted mb-0">
                            Alur tambah, detail, edit, dan hapus tetap berjalan seperti sebelumnya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 mt-4">
        <div class="card-body p-4 p-md-5">
            <div class="d-flex align-items-start gap-3">
                <div class="icon-chip">
                    <i class="bi bi-info-circle-fill"></i>
                </div>

                <div>
                    <h3 class="mb-2">Tentang Sistem</h3>
                    <p class="text-muted mb-0">
                        Sistem ini digunakan untuk mengelola data mahasiswa seperti
                        NIM, nama lengkap, tempat lahir, tanggal lahir,
                        email, program studi, dan alamat mahasiswa.
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
