@extends('layouts.master')

@section('title', 'Tambah Game')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah Game</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('game.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Game:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="gameplay">Gameplay:</label>
                <textarea class="form-control" id="gameplay" name="gameplay" rows="3" required></textarea>
            </div>
            
            <div class="form-group">
                <label for="developer">Developer:</label>
                <input type="text" class="form-control" id="developer" name="developer" required>
            </div>
            <div class="form-group">
                <label for="year">Tahun Rilis:</label>
                <input type="number" class="form-control" id="year" name="year" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a class="btn btn-primary" href="{{ route('game.index') }}">Kembali</a>
        </form>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Error!</strong> Terdapat masalah dengan inputan anda.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


@endsection