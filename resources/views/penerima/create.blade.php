@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Penerima</h2>

    <form action="{{ route('penerima.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat:</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Usia:</label>
            <input type="number" name="usia" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Pekerjaan:</label>
            <input type="text" name="pekerjaan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jenis Bantuan:</label>
            <input type="text" name="jenis_bantuan" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('penerima.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
