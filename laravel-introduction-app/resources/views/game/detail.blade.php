@extends('layouts.master')

@section('title')
Halaman Detail Game
@endsection

@section('content')
    <h1>{{ $game->name }}</h1>
    <p>Gameplay: {{ $game->gameplay }}</p>
    <p>Developer: {{ $game->developer }}</p>
    <p>Tahun Rilis: {{ $game->year }}</p>

    <a class="btn btn-primary" href="{{ route('games.index') }}">Kembali</a>

@endsection
