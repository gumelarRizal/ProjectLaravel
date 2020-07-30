<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>LARAVEL Eloquent</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    </head>
<body>
 
	<div class="container">
 
		<div class="card mt-5">
			<div class="card-header text-center">
                <h3>DATA Siswa</h3>
            </div>
			<div class="card-body">
 
				<a href="/siswa">Data siswa</a>
				|
				<a href="/siswa/trash" class="btn btn-sm btn-primary">Tong Sampah</a>
 
				<br/>
				<br/>
 
				<a href="/siswa/kembalikan_semua">Kembalikan Semua</a>
				|
				<a href="/siswa/hapus_permanen_semua">Hapus Permanen Semua</a>
				<br/>
				<br/>
 
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Nama</th>
                            <th>Umur</th>
                            <th>Alamat</th>
							<th width="30%">OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($siswa as $g)
						<tr>
							<td>{{ $g->Siswa_nama }}</td>
                            <td>{{ $g->Siswa_umur }}</td>
                            <td>{{ $g->Siswa_alamat}}</td>
							<td>
								<a href="/siswa/kembalikan/{{ $g->id }}" class="btn btn-success btn-sm">Restore</a>
								<a href="/siswa/hapus_permanen/{{ $g->id }}" class="btn btn-danger btn-sm">Hapus Permanen</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>