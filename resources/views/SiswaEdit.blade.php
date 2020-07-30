<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>LARAVEL eloquent</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Form Input Siswa
                </div>
                <div class="card-body">
                    <a href="/siswa" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/siswa/update/{{$siswa->id}}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Siswa .." value="{{$siswa->Siswa_nama}}">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>Umur</label>
                            <input type="text" name="umur" class="form-control" placeholder="Umur Siswa .." value="{{$siswa->Siswa_umur}}">
 
                            @if($errors->has('umur'))
                                <div class="text-danger">
                                    {{ $errors->first('umur')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat Siswa ..">{{$siswa->Siswa_alamat}}</textarea>
 
                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>