@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Penerima Bantuan</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $penerima->nama }}</h5>
            <p class="card-text"><strong>Alamat:</strong> {{ $penerima->alamat }}</p>
            <p class="card-text"><strong>Usia:</strong> {{ $penerima->usia }}</p>
            <p class="card-text"><strong>Pekerjaan:</strong> {{ $penerima->pekerjaan }}</p>
            <p class="card-text"><strong>Jenis Bantuan:</strong> {{ $penerima->jenis_bantuan }}</p>
        </div>
    </div>

    <a href="{{ route('penerima.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
