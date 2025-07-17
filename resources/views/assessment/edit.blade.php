@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Assessment</h2>

    <form action="{{ route('assessment.update', $assessment->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Penerima</label>
            <select name="penerima_id" class="form-control" required>
                @foreach($penerimas as $penerima)
                    <option value="{{ $penerima->id }}" {{ $penerima->id == $assessment->penerima_id ? 'selected' : '' }}>
                        {{ $penerima->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group mt-2">
            <label>Kesehatan</label>
            <input type="text" name="kesehatan" class="form-control" value="{{ $assessment->kesehatan }}" required>
        </div>

        <div class="form-group mt-2">
            <label>Pendidikan</label>
            <input type="text" name="pendidikan" class="form-control" value="{{ $assessment->pendidikan }}" required>
        </div>

        <div class="form-group mt-2">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan" class="form-control" value="{{ $assessment->pekerjaan }}" required>
        </div>

        <div class="form-group mt-2">
            <label>Penghasilan</label>
            <input type="text" name="penghasilan" class="form-control" value="{{ $assessment->penghasilan }}" required>
        </div>

        <div class="form-group mt-2">
            <label>Kondisi Rumah</label>
            <input type="text" name="kondisi_rumah" class="form-control" value="{{ $assessment->kondisi_rumah }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan Perubahan</button>
        <a href="{{ route('assessment.index') }}" class="btn btn-secondary mt-3">Batal</a>
    </form>
</div>
@endsection
