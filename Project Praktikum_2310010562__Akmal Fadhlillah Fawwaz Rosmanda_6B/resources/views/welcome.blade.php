@extends('layouts.app')
@section('content')
<div class="container">
    <div class="m-auto">
        <div class="card mt-4 mx-auto" style="width: 50%;">
            <div class="card-body">
                <div class="text-center">
                    <h3>Selamat Datang, di Aplikasi Akademik Web 2</h3>
                    <p>Silahkan Login dengan username dan password anda</p>
                </div>
                
                    <form action="{{ route('auth.loginStore') }}" method="post">
                        @csrf
                        <div class="form-group mt-3">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="silahkan masukan username anda">
                            @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="silahkan masukan password anda">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group float-end mt-3">
                            <a href="{{ route('auth.registerView') }}" class="btn btn-success">Register</a>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection