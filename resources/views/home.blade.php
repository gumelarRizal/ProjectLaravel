{{-- Menghubungkan dengan view tempate induk --}}
@extends('master')

{{-- isi bagian judul halaman --}}
{{-- cara penulisan isi section yang pendek --}}
@section('judul_halaman','Halaman Home')
    {{-- isi bagian konten --}}
    {{-- cara penulisan isi section yang panjang --}}
    @section('content')
        <p>Ini adalah Halaman Home</p>
        <p>Selamat Datang</p>

@endsection