@extends('layouts.master')
@section('title')
Halaman Welcome

@endsection

@section('content')
    <h1>SELAMAT DATANG! <?php echo $full_name; ?> <?php echo $last_name; ?></h1>
    <h2>Terima kasih telah bergabung di Sanberbook.Social Media kita bersama!</h2>
@endsection