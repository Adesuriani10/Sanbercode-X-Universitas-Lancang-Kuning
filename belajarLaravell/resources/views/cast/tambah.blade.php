@extends('layouts.master')

@section('title')
Halaman Tambah Cast
@endsection

@section('content')

<form method="POST" action="/cast">

    {{-- untuk Validation --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- Ini Form Inputnya --}}
    @csrf
    <div class="form-group">
      <label>Cast Nama</label>
      <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label>Umur</label>
        <input type="text" class="form-control" name="umur">
      </div>
    <div class="form-group">
        <label>Bio</label>
        <textarea name="bio" class="form-control" cols="30" rows="5"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection