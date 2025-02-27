<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiC extends Controller
{
   //public function index(){
    	//return view('home');
   	
   	 public function index()
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->get();
 
    	// mengirim data pegawai ke view index
    	return view('index',['pegawai' => $pegawai]);
 
    }

   public function formulir(){
   	return view('formulir');
   }
   public function proses(Request $request){
   	$nama = $request->input('nama');
   	$alamat = $request->input('alamat');
   	return "Nama : ".$nama.", Alamat :".$alamat;

   }
   public function tambah(){
    return view('tambah');

   }
   //method insert data ke DB
   public function store(Request $request){
    //insert data ke table pegawai
    DB::table('pegawai')->insert([
      'pegawai_nama'=>$request->nama,
    'pegawai_jabatan' => $request->jabatan,
  'pegawai_umur' => $request->umur,
  'pegawai_alamat' => $request->alamat
]);
    //alihkan ke halaman yg diinginkan
    return redirect ('/blog/DataPegawai');

   }
}
