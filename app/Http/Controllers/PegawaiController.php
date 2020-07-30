<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index(){
        $pegawai = DB::table('TB_PEGAWAI')->paginate(10);
        $varDump = DB::table('TB_PEGAWAI')->select('pegawai_nama');
        $query = $varDump->addSelect('pegawai_umur','pegawai_alamat')->get();
        // dd($query);
        return view('index',['pegawai'=>$pegawai]);
    }
    public function cari(Request $request){
        $cari = $request->cari;
        $pegawai = DB::table('TB_PEGAWAI')->where('pegawai_nama','like',"%".$cari."%")->paginate();
        return view('index',['pegawai'=>$pegawai]);
    }
    public function tambah(){
        return view('tambah');
    }
    public function get_data_edit($id){
        $pegawai = DB::table('TB_PEGAWAI')->where('pegawai__id',$id)->get();
        return view('edit',['pegawai'=>$pegawai]);
    }
    public function get_data_delete($id){
        DB::table('TB_PEGAWAI')->where('pegawai__id',$id)->delete();
        return redirect('/pegawai');
        // return view('edit',['pegawai'=>$pegawai]);
    }
    public function store(Request $request)
    {
        DB::table('TB_PEGAWAI')->insert([
            'pegawai_nama'=>$request->nama,
            'pegawai_jabatan'=>$request->jabatan,
            'pegawai_umur'=>$request->umur,
            'pegawai_alamat'=>$request->alamat
        ]);
        return redirect('/pegawai');
    }
    public function update(Request $request){
        DB::table('TB_PEGAWAI')->where('pegawai__id',$request->id)->update([
            'pegawai_nama'=>$request->nama,
            'pegawai_jabatan'=>$request->jabatan,
            'pegawai_umur'=>$request->umur,
            'pegawai_alamat'=>$request->alamat
        ]);
        return redirect('/pegawai');
    }
    // public function formulir(){
    //     return view('formulir');
    // }   
    // public function proses(Request $request){
    //     $nama = $request->input('nama');
    //     $alamat = $request->input('alamat');
    //     return "Nama : ".$nama.", Alamat : ".$alamat; 
    // }
}
