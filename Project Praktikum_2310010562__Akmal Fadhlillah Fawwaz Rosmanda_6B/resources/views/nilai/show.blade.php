@extends('layouts.app')
@section('title', 'Detail Nilai')
@section('content')
<div class="container mt-4 mb-5">
    <div class="card shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">Detail Data Nilai</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 30%">NIM</th>
                    <td>{{ $nilai->mahasiswa->nim }}</td>
                </tr>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <td>{{ $nilai->mahasiswa->nama }}</td>
                </tr>
                <tr>
                    <th>Mata Kuliah</th>
                    <td>{{ $nilai->mata_kuliah }}</td>
                </tr>
                <tr>
                    <th>Nilai</th>
                    <td>{{ $nilai->nilai }}</td>
                </tr>
                <tr>
                    <th>Klasifikasi</th>
                    <td>{{ $nilai->klasifikasi }}</td>
                </tr>
            </table>
            <div class="d-flex justify-content-between">
                <a href="{{ route('nilai.index') }}" class="btn btn-secondary">Kembali</a>
                <a href="{{ route('nilai.edit', $nilai->id) }}" class="btn btn-warning">Edit</a>
            </div>
        </div>
    </div>
</div>
@endsection