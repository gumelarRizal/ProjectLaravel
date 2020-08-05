{{-- Menghubungkan dengan view tempate induk --}}
@extends('layouts/app')

{{-- isi bagian judul halaman --}}
{{-- cara penulisan isi section yang pendek --}}
{{-- @section('judul_halaman','Halaman Home') --}}
    {{-- isi bagian konten --}}
    {{-- cara penulisan isi section yang panjang --}}
    @section('content')
    <div class="container">
		<div class="card">
			<div class="card-body">
                <h3>DATA PEGAWAI</h3>
                {{-- <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a> --}}
                {{-- <hr> --}}
                <p>Cari Data Pegawai :</p>
                <div class="form-group">

                </div>
                <form action="/pegawai/cari" method="GET" class="form-inline">
                    <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
                    <input class="btn btn-primary ml-3" type="submit" value="CARI">
                </form>
                <br>
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Pegawai</th>
                        <th>Jabatan</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    

@endsection