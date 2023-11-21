<?php

namespace App\Http\Controllers;
//namespace = package

use Illuminate\Http\Request;

class DosenController extends Controller
//extends: inheritance
{
    public function index(){
        $a = 7;
        $b = 3;
        $c = $a * $b;
        return "<h1>Hasil Perkalian: ". $c . "</h1>";
    }

    public function biodata(){
        $nama = "Watermelon";
        $alamat = "Pohon";
        $umur = 20;
        return view('biodata', ['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
        //'nama', 'alamat', dan 'umur' merupakan variable yang diambil dari file 'biodata'
        //$nama, $alamat, $umur merupakan variable yang diambil dari line 19, 20, 21
    }

    public function showjam($jam){
        //parameter function "$jam" berupa primitive data type
    	return "<h2>Sekarang jam: " . $jam . "<h2>";
    }

    public function formulir(){
    	return view('formulir');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        $nrp = $request->input('nrp');
        return "Anda telah mengisi <br>
           Nama   : " . $nama .
        ", Alamat : " . $alamat .
        ", NRP    : " . $nrp .
        "<br>?" . $request;
    }
}
