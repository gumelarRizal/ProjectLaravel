<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD LARAVEL</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
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
                    @foreach ($pegawai as $data)
                        <tr>
                            <td>{{$data->pegawai_nama}}</td>
                            <td>{{$data->pegawai_jabatan}}</td>
                            <td>{{$data->pegawai_umur}}</td>
                            <td>{{$data->pegawai_alamat}}</td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $data->pegawai__id }}">Edit</a>
                                <a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $data->pegawai__id }}">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <br>
                Halaman : {{$pegawai->currentPage()}}  <br>
                Jumlah data : {{$pegawai->total()}} <br>
                Data per halaman : {{$pegawai->perPage()}} <br>
            
                {{$pegawai->links()}}
            </div>
        </div>
    </div>
</body>
</html>