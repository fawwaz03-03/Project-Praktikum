@extends('layouts.app')
@section('title', 'Data Nilai')

@section('content')
<div class="container mt-4 mb-5">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Nilai</h5>
            <a href="{{ route('nilai.create') }}" class="btn btn-light btn-sm">+ Tambah Data</a>
        </div>

        <div class="card-body">
            <form action="{{ route('nilai.index') }}" method="GET" class="row g-2 mb-3">
                <div class="col-md-4">
                    <input type="text" name="search" class="form-control"
                        placeholder="Cari NIM, Nama, atau Mata Kuliah..."
                        value="{{ old('search') }}">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Cari</button>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Mata Kuliah</th>
                            <th>Nilai</th>
                            <th>Klasifikasi</th>
                            <th class="text-center" style="width:200px;">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($datas as $item)
                            <tr>
                                <td>{{ $loop->iteration + ($datas->currentPage() - 1) * $datas->perPage() }}</td>
                                <td>{{ $item->mahasiswa->nim }}</td>
                                <td>{{ $item->mahasiswa->nama }}</td>
                                <td>{{ $item->mata_kuliah }}</td>
                                <td>{{ $item->nilai }}</td>

                                <td class="text-center">
                                    @if($item->nilai >= 85)
                                        <span class="">A</span>
                                    @elseif($item->nilai >= 70)
                                        <span class="">B</span>
                                    @elseif($item->nilai >= 60)
                                        <span class="">C</span>
                                    @elseif($item->nilai >= 50)
                                        <span class="">D</span>
                                    @else
                                        <span class="">E</span>
                                    @endif
                                </td>

                                <td class="text-center">
                                    <a href="{{ route('nilai.show', $item->id) }}" class="btn btn-info btn-sm">
                                        Lihat
                                    </a>

                                    <a href="{{ route('nilai.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('nilai.delete', $item->id) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    Data tidak ditemukan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-end">
                {{ $datas->links() }}
            </div>

        </div>
    </div>
</div>
@endsection