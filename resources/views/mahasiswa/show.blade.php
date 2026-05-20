@extends('layouts.main')

@section('title', 'Detail Mahasiswa')

@section('content')

<div class="container mt-4">

    <div class="page-heading">
        <div>
            <h2><i class="bi bi-person-vcard-fill text-primary me-2"></i>Detail Mahasiswa</h2>
            <p class="text-muted">Informasi lengkap data mahasiswa.</p>
        </div>

        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left me-1"></i>Kembali
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-3 p-md-4">
            <div class="d-flex flex-column flex-md-row justify-content-between gap-3 mb-4">
                <div>
                    <h3 class="mb-1">{{ $mahasiswa->nama_lengkap }}</h3>
                    <p class="text-muted mb-0">{{ $mahasiswa->nim }} | {{ $mahasiswa->email }}</p>
                </div>

                <div>
                    <span class="badge badge-prodi px-3 py-2">{{ $mahasiswa->prodi }}</span>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <tbody>
                        <tr>
                            <th class="detail-label">NIM</th>
                            <td>{{ $mahasiswa->nim }}</td>
                        </tr>
                        <tr>
                            <th class="detail-label">Nama Lengkap</th>
                            <td>{{ $mahasiswa->nama_lengkap }}</td>
                        </tr>
                        <tr>
                            <th class="detail-label">Tempat Lahir</th>
                            <td>{{ $mahasiswa->tempat_lahir }}</td>
                        </tr>
                        <tr>
                            <th class="detail-label">Tanggal Lahir</th>
                            <td>{{ \Carbon\Carbon::parse($mahasiswa->tgl_lahir)->format('d M Y') }}</td>
                        </tr>
                        <tr>
                            <th class="detail-label">Email</th>
                            <td>{{ $mahasiswa->email }}</td>
                        </tr>
                        <tr>
                            <th class="detail-label">Program Studi</th>
                            <td>{{ $mahasiswa->prodi }}</td>
                        </tr>
                        <tr>
                            <th class="detail-label">Alamat</th>
                            <td>{{ $mahasiswa->alamat }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="d-flex flex-column flex-sm-row gap-2 mt-4">
                <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning">
                    <i class="bi bi-pencil-square me-1"></i>Edit Data
                </a>

                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left me-1"></i>Kembali
                </a>
            </div>
        </div>
    </div>

</div>

@endsection
