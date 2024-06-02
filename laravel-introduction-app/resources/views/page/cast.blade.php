@extends('layouts.master')

@section('title', 'Daftar Cast')

@section('content')
<div class="container">
    <h1>Daftar Cast</h1>

    <a href="{{ route('cast.create') }}" class="btn btn-primary mb-3">Tambah Cast</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Bio</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($casts as $cast)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $cast->name }}</td>
                <td>{{ $cast->age }}</td>
                <td>{{ $cast->bio }}</td>
                <td>
                    <a href="{{ route('cast.show', $cast->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('cast.edit', $cast->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('cast.destroy', $cast->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
