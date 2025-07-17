@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Penerima Bantuan Sosial</h2>
    <a href="{{ route('penerima.create') }}" class="btn btn-primary mb-3">+ Tambah Data</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Usia</th>
                <th>Pekerjaan</th>
                <th>Jenis Bantuan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penerima as $penerima)
            <tr>
                <td>{{ $penerima->nama }}</td>
                <td>{{ $penerima->alamat }}</td>
                <td>{{ $penerima->usia }}</td>
                <td>{{ $penerima->pekerjaan }}</td>
                <td>{{ $penerima->jenis_bantuan }}</td>
                <td>
                    <a href="{{ route('penerima.edit', $penerima->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('penerima.destroy', $penerima->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
