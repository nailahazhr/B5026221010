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
}
