@extends('layouts.main')

@section('title', 'Hasil Pencarian')

@section('content')

<div class="container mt-4">

    <div class="page-heading">
        <div>
            <h2><i class="bi bi-search text-primary me-2"></i>Hasil Pencarian</h2>
            <p class="text-muted">
                Keyword: <strong>{{ $keyword !== '' ? $keyword : '-' }}</strong>
            </p>
        </div>
    </div>

    @if ($keyword === '')
        <div class="alert alert-warning">
            Masukkan kata kunci pencarian terlebih dahulu.
        </div>
    @else
        <div class="card shadow-sm mb-4">
            <div class="card-body p-3 p-md-4">
                <h5 class="mb-3">Mahasiswa</h5>

                @if ($mahasiswa->isEmpty())
                    <div class="alert alert-info mb-0">
                        Data mahasiswa tidak ditemukan.
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered align-middle">
                            <thead class="text-center">
                                <tr>
                                    <th width="80">No</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Prodi</th>
                                    <th width="120">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($mahasiswa as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $item->nim }}</td>
                                        <td>{{ $item->nama_lengkap }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->prodi }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('mahasiswa.show', $item->id) }}" class="btn btn-primary btn-sm">
                                                <i class="bi bi-eye me-1"></i>Detail
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-body p-3 p-md-4">
                <h5 class="mb-3">Dosen</h5>

                @if ($dosen->isEmpty())
                    <div class="alert alert-info mb-0">
                        Data dosen tidak ditemukan.
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered align-middle">
                            <thead class="text-center">
                                <tr>
                                    <th width="80">No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Prodi</th>
                                    <th width="120">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($dosen as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $item->nik }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->prodi }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('dosen.show', $item->id) }}" class="btn btn-primary btn-sm">
                                                <i class="bi bi-eye me-1"></i>Detail
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    @endif

</div>

@endsection
