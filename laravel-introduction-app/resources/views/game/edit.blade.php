@extends('layouts.master')

@section('title')
Halaman Edit Game
@endsection

@section('content')

<form method="POST" action="{{ route('game.update', $game->id) }}">
    @csrf
    {{-- Validasi --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    {{-- Form input --}}
    @method("PUT")
    <div class="form-group">
      <label>Nama Game</label>
      <input type="text" value="{{ $game->name }}" class="form-control" name="name">
    </div>
    <div class="form-group">
      <label>Gameplay</label>
      <input type="text" value="{{ $game->gameplay }}" class="form-control" name="gameplay">
    </div>
    <div class="form-group">
      <label>Developer</label>
      <input type="text" value="{{ $game->developer }}" class="form-control" name="developer">
    </div>
    <div class="form-group">
      <label>Tahun Rilis</label>
      <input type="text" value="{{ $game->year }}" class="form-control" name="year">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-primary" href="{{ route('game.index') }}">Kembali</a>
</form>

@endsection
