@extends('layouts.main')

@section('title', 'Detail Dosen')

@section('content')

<div class="container mt-4">

    <div class="page-heading">
        <div>
            <h2><i class="bi bi-person-vcard-fill text-primary me-2"></i>Detail Dosen</h2>
            <p class="text-muted">Informasi lengkap data dosen.</p>
        </div>

        <a href="{{ route('dosen.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left me-1"></i>Kembali
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-3 p-md-4">
            <div class="d-flex flex-column flex-md-row justify-content-between gap-3 mb-4">
                <div>
                    <h3 class="mb-1">{{ $dosen->nama }}</h3>
                    <p class="text-muted mb-0">{{ $dosen->nik }} | {{ $dosen->email }}</p>
                </div>

                <div>
                    <span class="badge badge-prodi px-3 py-2">{{ $dosen->prodi }}</span>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <tbody>
                        <tr>
                            <th class="detail-label">NIK</th>
                            <td>{{ $dosen->nik }}</td>
                        </tr>
                        <tr>
                            <th class="detail-label">Nama Lengkap</th>
                            <td>{{ $dosen->nama }}</td>
                        </tr>
                        <tr>
                            <th class="detail-label">Email</th>
                            <td>{{ $dosen->email }}</td>
                        </tr>
                        <tr>
                            <th class="detail-label">Nomor Telepon</th>
                            <td>{{ $dosen->notelp }}</td>
                        </tr>
                        <tr>
                            <th class="detail-label">Program Studi</th>
                            <td>{{ $dosen->prodi }}</td>
                        </tr>
                        <tr>
                            <th class="detail-label">Alamat</th>
                            <td>{{ $dosen->alamat }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="d-flex flex-column flex-sm-row gap-2 mt-4">
                <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-warning">
                    <i class="bi bi-pencil-square me-1"></i>Edit Data
                </a>

                <a href="{{ route('dosen.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left me-1"></i>Kembali
                </a>
            </div>
        </div>
    </div>

</div>

@endsection
