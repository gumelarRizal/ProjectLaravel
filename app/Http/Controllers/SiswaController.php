<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index(){
        // $Siswa = Siswa::where('Siswa_id','1')->get();
        $Siswa = Siswa::all();
        //dd($Siswa);
        return view('Siswa',['Siswa'=>$Siswa]);
    }
    public function tambah(){
        return view('SiswaAdd');
    }
    public function store(Request $request){
        $this->validate($request,[
            'nama' => 'required',
            'umur' => 'required|numeric',
            'alamat' => 'required'
        ]);
        Siswa::create([
            'Siswa_nama' => $request->nama,
            'Siswa_umur' => $request->umur,
            'Siswa_alamat' => $request->alamat
        ]);
        return redirect('/siswa');
    }
    public function GetDataId($id){
        $siswa = Siswa::find($id);
        // $siswa2 = DB::table('Siswa')->where('Siswa_ID',$id)->get();
        // dd($siswa);
        return view('SiswaEdit',['siswa'=>$siswa]);
    }
    public function Update($id, Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'umur' => 'required|numeric',
            'alamat' => 'required'
        ]);
        $siswa = Siswa::find($id);
        $siswa->Siswa_nama = $request->nama;
        $siswa->Siswa_umur = $request->umur;
        $siswa->Siswa_alamat = $request->alamat;
        $siswa->save();
        return redirect('/siswa');
    }
    public function Delete($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect()->back();
        // return redirect('/siswa');
    }
    public function Trash()
    {
        $siswa = Siswa::onlyTrashed()->get();
        // dd($siswa);
        return view('siswaTrash',['siswa'=>$siswa]);
    }
    public function Kembalikan($id)
    {
        $siswa = Siswa::onlyTrashed()->where('id',$id);
        $siswa->restore();
        return redirect('/siswa/trash');
    }
    public function KembalikanSemua(){
        $siswa = Siswa::onlyTrashed();
        $siswa->restore();
        return redirect('siswa/trash');
    }
    public function HapusPermanen($id)
    {
        $siswa = Siswa::onlyTrashed()->where('id',$id);
        $siswa->forceDelete();
        return redirect('/siswa/trash');
    }
    public function HapusPermanenSemua()
    {
        $siswa = Siswa::onlyTrashed();
        $siswa->forceDelete();
        return redirect('/siswa/trash');
    }
    
    
  
}
