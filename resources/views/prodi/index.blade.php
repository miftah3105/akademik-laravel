@extends('layouts.main')

@section('title', 'Daftar Prodi')

@section('content')

<div class="container mt-4">

    <div class="page-heading">
        <div>
            <h2>Daftar Program Studi</h2>
            <p class="text-muted">Rangkuman program studi dari data mahasiswa dan dosen.</p>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-3 p-md-4">
            @if ($prodi->isEmpty())
                <div class="alert alert-info mb-0">
                    Belum ada data program studi.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered align-middle">
                        <thead class="text-center">
                            <tr>
                                <th width="80">No</th>
                                <th>Nama Prodi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($prodi as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>
                                        <span class="badge badge-prodi px-3 py-2">{{ $item }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>

</div>

@endsection
