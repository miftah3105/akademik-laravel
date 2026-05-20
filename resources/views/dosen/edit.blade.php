@extends('layouts.main')

@section('title', 'Edit Dosen')

@section('content')

<div class="container mt-4">

    <div class="page-heading form-card">
        <div>
            <h2><i class="bi bi-pencil-square text-primary me-2"></i>Edit Dosen</h2>
            <p class="text-muted">Perbarui data dosen dengan informasi terbaru.</p>
        </div>
    </div>

    <div class="card shadow-sm form-card">
        <div class="card-header bg-primary text-white p-3 p-md-4">
            <h4><i class="bi bi-journal-check me-2"></i>Form Edit Dosen</h4>
            <p class="text-white-50">{{ $dosen->nama }} - {{ $dosen->nik }}</p>
        </div>

        <div class="card-body p-3 p-md-4">
            <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
                @csrf
                @method('PUT')

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">NIK</label>
                        <input type="text" name="nik" class="form-control" value="{{ old('nik', $dosen->nik) }}" placeholder="Masukkan NIK">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama', $dosen->nama) }}" placeholder="Masukkan nama lengkap">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email', $dosen->email) }}" placeholder="nama@email.com">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Nomor Telepon</label>
                        <input type="text" name="notelp" class="form-control" value="{{ old('notelp', $dosen->notelp) }}" placeholder="Masukkan nomor telepon">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Program Studi</label>
                        <select name="prodi" class="form-select">
                            <option value="">-- Pilih Prodi --</option>
                            <option value="TRPL" {{ old('prodi', $dosen->prodi) == 'TRPL' ? 'selected' : '' }}>TRPL</option>
                            <option value="MI" {{ old('prodi', $dosen->prodi) == 'MI' ? 'selected' : '' }}>MI</option>
                            <option value="TK" {{ old('prodi', $dosen->prodi) == 'TK' ? 'selected' : '' }}>TK</option>
                            <option value="TEKKOM" {{ old('prodi', $dosen->prodi) == 'TEKKOM' ? 'selected' : '' }}>TEKKOM</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" rows="4" class="form-control" placeholder="Masukkan alamat lengkap">{{ old('alamat', $dosen->alamat) }}</textarea>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row gap-2 mt-4">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i>Perbarui Data</button>
                    <a href="{{ route('dosen.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left me-1"></i>Kembali</a>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
