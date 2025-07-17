@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Data Assessment</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('assessment.create') }}" class="btn btn-primary mb-3">+ Tambah Assessment</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Penerima</th>
                <th>Kesehatan</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Penghasilan</th>
                <th>Kondisi Rumah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($assessments as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->penerima->nama }}</td>
                <td>{{ $item->kesehatan }}</td>
                <td>{{ $item->pendidikan }}</td>
                <td>{{ $item->pekerjaan }}</td>
                <td>{{ $item->penghasilan }}</td>
                <td>{{ $item->kondisi_rumah }}</td>
                <td>
                    <a href="{{ route('assessment.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ route('assessment.show', $item->id) }}" class="btn btn-sm btn-info">Lihat</a>

                    <form action="{{ route('assessment.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
