@extends('layouts.master')

@section('title')
Halaman Tampil Cast
@endsection

@section('content')
<a href="/cast/create" class="btn btn-sm btn-primary">Tambah</a>

<table class="table">
  <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($cast as $key=>$item)
    <tr>
      <th scope="row">{{$key + 1}}</th>
      <td>{{$item->nama}}</td>
      <td>
        <form action="/cast/{{$item->id}}" method="POST">
          <a href="/cast/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
          <a href="/cast/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
          @csrf
          @method("Delete")
          <input type="submit" class="btn btn-danger btn-sm" value="Delete">
          
        </form>
      </td>

    </tr>
        
    @empty
    <tr><td>cast tidak ada</td></tr>
        
    @endforelse
    
  </tbody>
</table>

@endsection
