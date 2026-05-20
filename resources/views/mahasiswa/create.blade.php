@extends('layouts.main')

@section('title', 'Tambah Mahasiswa')

@section('content')

<div class="container mt-4">

    <div class="page-heading form-card">
        <div>
            <h2><i class="bi bi-person-plus-fill text-primary me-2"></i>Tambah Mahasiswa</h2>
            <p class="text-muted">Lengkapi data mahasiswa baru Jurusan Teknologi Informasi.</p>
        </div>
    </div>

    <div class="card shadow-sm form-card">
        <div class="card-header bg-primary text-white p-3 p-md-4">
            <h4><i class="bi bi-journal-text me-2"></i>Form Data Mahasiswa</h4>
            <p class="text-white-50">Pastikan NIM dan email belum pernah digunakan.</p>
        </div>

        <div class="card-body p-3 p-md-4">
            <form action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf

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
                        <label class="form-label">NIM</label>
                        <input type="text"
                               name="nim"
                               class="form-control"
                               value="{{ old('nim') }}"
                               placeholder="Masukkan NIM">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text"
                               name="nama_lengkap"
                               class="form-control"
                               value="{{ old('nama_lengkap') }}"
                               placeholder="Masukkan nama lengkap">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Tempat Lahir</label>
                        <input type="text"
                               name="tempat_lahir"
                               class="form-control"
                               value="{{ old('tempat_lahir') }}"
                               placeholder="Masukkan tempat lahir">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email"
                               name="email"
                               class="form-control"
                               value="{{ old('email') }}"
                               placeholder="nama@email.com">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Tanggal Lahir</label>
                        <div class="row g-2">
                            <div class="col-md-4">
                                <select name="tanggal" class="form-select">
                                    <option value="">Tanggal</option>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <option value="{{ $i }}" {{ old('tanggal') == $i ? 'selected' : '' }}>
                                            {{ $i }}
                                        </option>
                                    @endfor
                                </select>
                            </div>

                            <div class="col-md-4">
                                <select name="bulan" class="form-select">
                                    <option value="">Bulan</option>
                                    @php
                                        $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                    @endphp
                                    @foreach ($bulan as $key => $value)
                                        <option value="{{ $key + 1 }}" {{ old('bulan') == $key + 1 ? 'selected' : '' }}>
                                            {{ $value }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4">
                                <select name="tahun" class="form-select">
                                    <option value="">Tahun</option>
                                    @for ($i = date('Y'); $i >= 1900; $i--)
                                        <option value="{{ $i }}" {{ old('tahun') == $i ? 'selected' : '' }}>
                                            {{ $i }}
                                        </option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Program Studi</label>
                        <select name="prodi" class="form-select">
                            <option value="">-- Pilih Prodi --</option>
                            <option value="TRPL" {{ old('prodi') == 'TRPL' ? 'selected' : '' }}>TRPL</option>
                            <option value="MI" {{ old('prodi') == 'MI' ? 'selected' : '' }}>MI</option>
                            <option value="TK" {{ old('prodi') == 'TK' ? 'selected' : '' }}>TK</option>
                            <option value="TEKKOM" {{ old('prodi') == 'TEKKOM' ? 'selected' : '' }}>TEKKOM</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat"
                                  rows="4"
                                  class="form-control"
                                  placeholder="Masukkan alamat lengkap">{{ old('alamat') }}</textarea>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row gap-2 mt-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save me-1"></i>Simpan Data
                    </button>

                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left me-1"></i>Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
