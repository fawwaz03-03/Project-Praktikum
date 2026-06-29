@extends('layouts.app')
@section('title', 'Tambah Data Nilai')
@section('content')
<div class="container mt-4 mb-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tambah Data Nilai</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('nilai.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="mahasiswa_id" class="form-label">Mahasiswa</label>
                    <select name="mahasiswa_id" id="mahasiswa_id" class="form-select @error('mahasiswa_id') is-invalid @enderror" required>
                        <option value="">--- Pilih Mahasiswa ---</option>
                        @foreach($mahasiswas as $m)
                            <option value="{{ $m->id }}" {{ old('mahasiswa_id') == $m->id ? 'selected' : '' }}>
                                {{ $m->nim }} - {{ $m->nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('mahasiswa_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="mata_kuliah" class="form-label">Mata Kuliah</label>
                    <select name="mata_kuliah" id="mata_kuliah" class="form-select @error('mata_kuliah') is-invalid @enderror" required>
                        <option value="">--- Pilih Mata Kuliah ---</option>
                        <option value="Algoritma 1" {{ old('mata_kuliah') == 'Algoritma 1' ? 'selected' : '' }}>Algoritma 1</option>
                        <option value="Algoritma 2" {{ old('mata_kuliah') == 'Algoritma 2' ? 'selected' : '' }}>Algoritma 2</option>
                        <option value="Pemrograman Visual 1" {{ old('mata_kuliah') == 'Pemrograman Visual 1' ? 'selected' : '' }}>Pemrograman Visual 1</option>
                        <option value="Pemrograman Visual 2" {{ old('mata_kuliah') == 'Pemrograman Visual 2' ? 'selected' : '' }}>Pemrograman Visual 2</option>
                        <option value="Pemrograman Web 1" {{ old('mata_kuliah') == 'Pemrograman Web 1' ? 'selected' : '' }}>Pemrograman Web 1</option>
                        <option value="Pemrograman Web 2" {{ old('mata_kuliah') == 'Pemrograman Web 2' ? 'selected' : '' }}>Pemrograman Web 2</option>
                        <option value="Pemrograman Web 3" {{ old('mata_kuliah') == 'Pemrograman Web 3' ? 'selected' : '' }}>Pemrograman Web 3</option>
                        <option value="Sistem Basis Data" {{ old('mata_kuliah') == 'Sistem Basis Data' ? 'selected' : '' }}>Sistem Basis Data</option>
                        <option value="Multimedia" {{ old('mata_kuliah') == 'Multimedia' ? 'selected' : '' }}>Multimedia</option>
                    </select>
                    @error('mata_kuliah')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="nilai" class="form-label">Nilai</label>
                    <input type="number" name="nilai" id="nilai" min="0" max="100" class="form-control @error('nilai') is-invalid @enderror"
                        value="{{ old('nilai') }}" required>
                    @error('nilai')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('nilai.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection