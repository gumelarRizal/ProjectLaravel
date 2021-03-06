<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo',function(){
    return "Halo rizal, Guys disini";
});

Route::get('dosen','DosenController@index');


Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');

Route::get('/blog','BlogController@home');
Route::get('/blog/tentang','BlogController@tentang');
Route::get('/blog/kontak','BlogController@kontak');

//pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::get('/pegawai/edit/{id}','PegawaiController@get_data_edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/hapus/{id}','PegawaiController@get_data_delete');
//end pegawai
// Siswa
Route::get('/siswa','SiswaController@index');
Route::get('/siswa/edit/{Siswa_ID}','SiswaController@GetDataId');
Route::put('/siswa/update/{id}','SiswaController@Update');
Route::get('/siswa/hapus/{id}','SiswaController@Delete');
Route::get('/siswa/tambah','SiswaController@tambah');
Route::post('/siswa/store','SiswaController@store');
Route::get('/siswa/trash','SiswaController@Trash');
Route::get('/siswa/kembalikan/{id}','SiswaController@Kembalikan');
Route::get('/siswa/hapus_permanen/{id}','SiswaController@HapusPermanen');
Route::get('/siswa/kembalikan_semua','SiswaController@KembalikanSemua');
Route::get('/siswa/hapus_permanen_semua','SiswaController@HapusPermanenSemua');
// end Siswa
//form validation

Route::get('/formValid_input','formValidController@input');
Route::post('/formValid_process','formValidController@process');
//end form validation
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//enkripsi / dekripsi
Route::get('/enkrips','RizalController@enkripsi');
//hashing
Route::get('/hash','RizalController@hash');

//upload
Route::get('/upload','UploadController@Upload');
Route::get('/unggah','UploadController@Unggah');
Route::post('/upload/proses','UploadController@ProsesUpload');
Route::post('/unggah/proses','UploadController@ProsesUnggah');
Route::get('/unggah/hapus/{id}','UploadController@UnggahHapus');

//session
Route::get('/session/tampil','Session\SessionController@tampilkanSession');
Route::get('/session/buat','Session\SessionController@buatSession');
Route::get('/session/hapus','Session\SessionController@hapusSession');

// notifikas
Route::get('/pesan','Session\NotifController@index');
Route::get('/pesan/sukses','Session\NotifController@sukses');
Route::get('/pesan/peringatan','Session\NotifController@peringatan');
Route::get('/pesan/gagal','Session\NotifController@gagal');

// mail
Route::get('/kirimemail', 'Mail\RizalMailController@index');


