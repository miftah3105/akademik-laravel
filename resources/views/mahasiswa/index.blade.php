@extends('layouts.main')

@section('title', 'Daftar Mahasiswa')

@section('content')

<div class="container mt-4">

    <div class="page-heading">
        <div>
            <h2>Daftar Mahasiswa</h2>
            <p class="text-muted">Data mahasiswa Jurusan Teknologi Informasi.</p>
        </div>

        <a href="{{ route('mahasiswa.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle me-1"></i>Tambah Mahasiswa
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-3 p-md-4">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered align-middle">
                    
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Email</th>
                            <th>Prodi</th>
                            <th>Alamat</th>
                            <th style="min-width: 220px;">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($mahasiswa as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration + ($mahasiswa->currentPage() - 1) * $mahasiswa->perPage() }}</td>
                                <td>{{ $item->nim }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->tempat_lahir }}</td>

                                <td>
                                    {{ \Carbon\Carbon::parse($item->tgl_lahir)->format('d M Y') }}
                                </td>

                                <td>{{ $item->email }}</td>
                                <td>{{ $item->prodi }}</td>
                                <td>{{ $item->alamat }}</td>

                                <td>
                                    <div class="action-buttons">
                                        <a href="{{ route('mahasiswa.show', $item->id) }}" class="btn btn-primary btn-sm">
                                            <i class="bi bi-eye me-1"></i>Show
                                        </a>

                                        <a href="{{ route('mahasiswa.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square me-1"></i>Edit
                                        </a>

                                        <form action="{{ route('mahasiswa.destroy', $item->id) }}" method="post" class="m-0" onsubmit="return confirm('Hapus data mahasiswa ini?');">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash3 me-1"></i>Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

            <div class="mt-3">
                {{ $mahasiswa->links() }}
            </div>

        </div>
    </div>

</div>


@endsection
