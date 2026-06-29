@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <div class="table">
                <div class="row">
                    <div class="col">
                        <h3>PROFILE USER</h3>
                    </div>
                    <div class="col ">
                        <div class="float-end">
                            <a href="{{ route('home') }}" class="btn btn-light">Kembali</a>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <td width="20%">Nama</td>
                        <td width="1%">:</td>
                        <td>
                            {{ $profile->nama }}
                        </td>
                    </tr>
                    <tr>
                        <td width="20%">Username</td>
                        <td width="1%">:</td>
                        <td>
                            {{ $profile->username }}
                        </td>
                    </tr>
                    <tr>
                        <td width="20%">Tanggal Register</td>
                        <td width="1%">:</td>
                        <td>
                            {{ $profile->created_at }}
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection