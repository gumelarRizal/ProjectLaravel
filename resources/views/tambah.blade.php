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
    <form action="/pegawai/store" method="POST">
        {{ csrf_field() }}
        Nama : <input type="text" name="nama" required><br/>
        jabatan : <input type="text" name="jabatan" required><br/>
        Umur : <input type="text" name="umur" required><br>
        Alamat : <textarea name="alamat" ></textarea>
        <input type="submit" value="simpan data">
    </form>
</body>
</html>