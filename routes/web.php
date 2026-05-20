<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/prodi', function () {
    $prodi = Mahasiswa::query()
        ->whereNotNull('prodi')
        ->pluck('prodi')
        ->merge(
            Dosen::query()
                ->whereNotNull('prodi')
                ->pluck('prodi')
        )
        ->filter()
        ->unique()
        ->sort()
        ->values();

    return view('prodi.index', ['prodi' => $prodi]);
})->name('prodi.index');

Route::get('/search', function (Request $request) {
    $keyword = trim($request->input('q', ''));

    $mahasiswa = collect();
    $dosen = collect();

    if ($keyword !== '') {
        $mahasiswa = Mahasiswa::query()
            ->where('nim', 'like', "%{$keyword}%")
            ->orWhere('nama_lengkap', 'like', "%{$keyword}%")
            ->orWhere('email', 'like', "%{$keyword}%")
            ->orWhere('prodi', 'like', "%{$keyword}%")
            ->orWhere('alamat', 'like', "%{$keyword}%")
            ->get();

        $dosen = Dosen::query()
            ->where('nik', 'like', "%{$keyword}%")
            ->orWhere('nama', 'like', "%{$keyword}%")
            ->orWhere('email', 'like', "%{$keyword}%")
            ->orWhere('prodi', 'like', "%{$keyword}%")
            ->orWhere('alamat', 'like', "%{$keyword}%")
            ->get();
    }

    return view('search.index', [
        'keyword' => $keyword,
        'mahasiswa' => $mahasiswa,
        'dosen' => $dosen,
    ]);
})->name('search');

Route::prefix('mahasiswa')
    ->name('mahasiswa.')
    ->group(function () {

        Route::get('/', [MahasiswaController::class, 'index'])->name('index');
        Route::get('/create', [MahasiswaController::class, 'create'])->name('create');
        Route::post('/', [MahasiswaController::class, 'store'])->name('store');
        Route::get('/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('edit');
        Route::get('/{mahasiswa}', [MahasiswaController::class, 'show'])->name('show');
        Route::put('/{mahasiswa}', [MahasiswaController::class, 'update'])->name('update');
        Route::delete('/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('destroy');
        
});

Route::prefix('dosen')
    ->name('dosen.')
    ->group(function(){
        Route::get('/', [DosenController::class, 'index'])->name('index');
        Route::get('/create', [DosenController::class, 'create'])->name('create');
        Route::post('/', [DosenController::class, 'store'])->name('store');
        Route::get('/{dosen}/edit', [DosenController::class, 'edit'])->name('edit');
        Route::put('/{dosen}', [DosenController::class, 'update'])->name('update');
        Route::get('/{dosen}', [DosenController::class, 'show'])->name('show');
        Route::delete('/{dosen}', [DosenController::class, 'destroy'])->name('destroy');

    });
