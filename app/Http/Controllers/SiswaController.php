<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiswaModel;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index(){
        // $Siswa = SiswaModel::where('Siswa_id','1')->get();
        $Siswa = SiswaModel::all();
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
        SiswaModel::create([
            'Siswa_nama' => $request->nama,
            'Siswa_umur' => $request->umur,
            'Siswa_alamat' => $request->alamat
        ]);
        return redirect('/siswa');
    }
    public function GetDataId($id){
        $siswa = SiswaModel::find($id);
        // $siswa2 = DB::table('TB_M_SISWA')->where('Siswa_ID',$id)->get();
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
        $siswa = SiswaModel::find($id);
        $siswa->Siswa_nama = $request->nama;
        $siswa->Siswa_umur = $request->umur;
        $siswa->Siswa_alamat = $request->alamat;
        $siswa->save();
        return redirect('/siswa');
    }
    public function Delete($id)
    {
        $siswa = SiswaModel::find($id);
        $siswa->delete();
        return redirect()->back();
        // return redirect('/siswa');
    }
    public function Trash()
    {
        $siswa = SiswaModel::onlyTrashed()->get();
        // dd($siswa);
        return view('siswaTrash',['siswa'=>$siswa]);
    }
    public function Kembalikan($id)
    {
        $siswa = SiswaModel::onlyTrashed()->where('id',$id);
        $siswa->restore();
        return redirect('/siswa/trash');
    }
    public function KembalikanSemua(){
        $siswa = SiswaModel::onlyTrashed();
        $siswa->restore();
        return redirect('siswa/trash');
    }
    public function HapusPermanen($id)
    {
        $siswa = SiswaModel::onlyTrashed()->where('id',$id);
        $siswa->forceDelete();
        return redirect('/siswa/trash');
    }
    public function HapusPermanenSemua()
    {
        $siswa = SiswaModel::onlyTrashed();
        $siswa->forceDelete();
        return redirect('/siswa/trash');
    }
    public function rizal(){
        echo 'edan';
    }
    
  
}
