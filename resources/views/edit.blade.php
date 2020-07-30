<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD LARAVEL</title>
</head>
<body>
    <a href="/pegawai">Kembali</a>
    <br>
    <hr>
    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$p->pegawai__id}}">
            Nama : <input type="text" name="nama" required value="{{$p->pegawai_nama}}"><br/>
            jabatan : <input type="text" name="jabatan" required value="{{$p->pegawai_jabatan}}"><br/>
            Umur : <input type="text" name="umur" required value="{{$p->pegawai_umur}}"><br>
            Alamat : <textarea name="alamat" >{{$p->pegawai_alamat}}</textarea>
            <input type="submit" value="simpan data">
        </form>
    @endforeach
    
</body>
</html>