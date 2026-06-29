@extends('layouts.app')
@section('content')
<div class="container">
    <div class="m-auto">
        <div class="card mt-4 mx-auto" style="width: 50%;">
            <div class="card-body">
                <div class="text-center">
                    <h3>Halaman Register</h3>
                </div>
                <div class="form mt-4">
                    <form action="{{ route('auth.registerStore') }}" method="post">
                        @csrf
                        <div class="form-group mt-3">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                                placeholder="silahkan masukan nama anda">
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                                placeholder="silahkan masukan username anda">
                            @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                                placeholder="silahkan masukan password anda, minimal 8 karakter">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group float-end mt-3">
                            <a href="{{ route('auth.loginView') }}" class="btn btn-success">Back to login</a>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection