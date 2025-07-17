@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Detail Assessment</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nama Penerima: {{ $assessment->penerima->nama }}</h5>
            <p class="card-text"><strong>Kesehatan:</strong> {{ $assessment->kesehatan }}</p>
            <p class="card-text"><strong>Pendidikan:</strong> {{ $assessment->pendidikan }}</p>
            <p class="card-text"><strong>Pekerjaan:</strong> {{ $assessment->pekerjaan }}</p>
            <p class="card-text"><strong>Penghasilan:</strong> {{ $assessment->penghasilan }}</p>
            <p class="card-text"><strong>Kondisi Rumah:</strong> {{ $assessment->kondisi_rumah }}</p>
            <p class="card-text"><strong>Tanggal Input:</strong> {{ $assessment->created_at->format('d-m-Y H:i') }}</p>
        </div>
    </div>

    <a href="{{ route('assessment.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar</a>
</div>
@endsection
