@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data Penerima</h2>

    <form action="{{ route('penerima.update', $penerima->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" value="{{ $penerima->nama }}" required>
        </div>
        <div class="mb-3">
            <label>Alamat:</label>
            <textarea name="alamat" class="form-control" required>{{ $penerima->alamat }}</textarea>
        </div>
        <div class="mb-3">
            <label>Usia:</label>
            <input type="number" name="usia" class="form-control" value="{{ $penerima->usia }}" required>
        </div>
        <div class="mb-3">
            <label>Pekerjaan:</label>
            <input type="text" name="pekerjaan" class="form-control" value="{{ $penerima->pekerjaan }}" required>
        </div>
        <div class="mb-3">
            <label>Jenis Bantuan:</label>
            <input type="text" name="jenis_bantuan" class="form-control" value="{{ $penerima->jenis_bantuan }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('penerima.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
