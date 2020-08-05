<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
    	$nama ="Haris";
    	$materi = ["Natematika","Bahasa Indonesia"];
    return view('biodata', ['nama' => $nama, 'matkul' => $materi]);
}
}
