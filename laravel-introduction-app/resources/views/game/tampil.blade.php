@extends('layouts.master')

@section('title')
Halaman Tampil Game
@endsection

@section('content')
<a href="{{ route('game.create') }}" class="btn btn-sm btn-primary">Tambah</a>

<table class="table">
  <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Developer</th>
        <th scope="col">Tahun</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($games as $key => $game)
    <tr>
      <th scope="row">{{ $key + 1 }}</th>
      <td>{{ $game->name }}</td>
      <td>{{ $game->developer }}</td>
      <td>{{ $game->year }}</td>
      <td>
        <form action="{{ route('game.destroy', $game->id) }}" method="POST">
          <a href="{{ route('game.show', $game->id) }}" class="btn btn-info btn-sm">Detail</a>
          <a href="{{ route('game.edit', $game->id) }}" class="btn btn-warning btn-sm">Edit</a>
          @csrf
          @method("DELETE")
          <input type="submit" class="btn btn-danger btn-sm" value="Delete">
        </form>
      </td>
    </tr>
    @empty
    <tr><td>Game tidak ada</td></tr>
    @endforelse
  </tbody>
</table>

@endsection
