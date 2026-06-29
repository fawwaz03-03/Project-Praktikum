@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-body bg-light">
            <h3 class="text-primary">Halo, Selamat Datang User {{ Auth::user()->nama }}</h3>
            <p>Selamat Datang, Sobat Belajar! <br>

Kami dengan hangat menyambutmu. Di sini, kamu bukan sekadar mahasiswa kamu adalah bagian dari keluarga besar kami. Semangat terus ya!</p>
        </div>
    </div>
</div>
@endsection