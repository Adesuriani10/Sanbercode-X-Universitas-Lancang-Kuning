@extends('layouts.master')

@section('title')
Halaman Detail Cast
@endsection

@section('content')

    <h3>{{ $cast->nama}}</h3>
    <p>{{ $cast->umur}}</p>
    <p>{{ $cast->bio}}</p>

    <a href="/cast" class="btn btn-secondary btn-sm">kembali</a>

@endsection