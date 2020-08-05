<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\upload;
use File;

class UploadController extends Controller
{
    public function Upload()
    {
        return view('upload.upload');
    }
    public function ProsesUpload(Request $request)
    {
        $this->validate($request,[
            'file' => 'required',
            'keterangan' => 'required'
        ]);

        //menyimpan data file yang diupload ke variable $file
        $file = $request->file('file');

        // nama file
        echo 'File Name : '.$file->getClientOriginalName();
        echo '<br/>';
        
        // extensi file
        echo 'File Extension : '.$file->getClientOriginalExtension();
        echo '<br/>';
        
        // real path
        echo 'File Real Path : '.$file->getRealPath();
        echo '<br/>';
        
        // ukuran file
        echo 'File Size : '.$file->getSize();
        echo '<br/>';

        // tipe mime
        echo 'File Mime Type : '.$file->getMimeType();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';

        // Upload File 
        $file->move($tujuan_upload,$file->getClientOriginalName());
    }
    public function Unggah(){
        $upload = upload::get();
        return view('upload.unggah',['upload'=>$upload]); 
    }
    public function ProsesUnggah(Request $request)
    {
        $this->validate($request,[
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan' => 'required'
        ]);

        // yimpan data file yang diupload ke variable $file
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan naam folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        upload::create([
            'file' => $nama_file,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->back();
    }
    public function UnggahHapus($id)
    {
        $upload = upload::where('id',$id)->first();
        File::delete('data_file/'.$upload->file);

        $delete = upload::where('id',$id)->delete();
        return redirect()->back();
    }
}
