@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Tambah Data Assessment</h2>

    <form action="{{ route('assessment.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama Penerima</label>
            <select name="penerima_id" class="form-control" required>
                <option value="">-- Pilih --</option>
                @foreach($penerimas as $p)
                    <option value="{{ $p->id }}">{{ $p->nama }}</option>
                @endforeach
            </select>
        </div>

        @foreach(['kesehatan', 'pendidikan', 'pekerjaan', 'penghasilan', 'kondisi_rumah'] as $field)
        <div class="mb-3">
            <label>{{ ucfirst(str_replace('_', ' ', $field)) }}</label>
            <input type="number" name="{{ $field }}" class="form-control" required min="0" max="100">
        </div>
        @endforeach

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('assessment.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
