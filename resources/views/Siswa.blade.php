<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL Eloquent</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <div class="container">
		<div class="card mt-3">
            <div class="card-header text-center">
                <h3>DATA Siswa</h3>
            </div>
			<div class="card-body">
                <a href="/siswa/tambah" class="btn btn-info">  Tambah Siswa Baru</a>
                |
                <a href="/siswa/trash">Tong Sampah</a>
                <hr>
                <br>
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Siswa</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($Siswa as $data)
                        <tr>
                            <td>{{$data->Siswa_nama}}</td>
                            <td>{{$data->Siswa_umur}}</td>
                            <td>{{$data->Siswa_alamat}}</td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="/siswa/edit/{{ $data->id }}">Edit</a>
                                <a class="btn btn-danger btn-sm" href="/siswa/hapus/{{ $data->id }}">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{-- <br>
                Halaman : {{$Siswa->currentPage()}}  <br>
                Jumlah data : {{$Siswa->total()}} <br>
                Data per halaman : {{$Siswa->perPage()}} <br>
            
                {{$Siswa->links()}} --}}
            </div>
        </div>
    </div>
</body>
</html>