<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BelanjaController extends Controller
{
	public function index()
	{
    	// mengambil data dari table keranjangbelanja
		$keranjangbelanja = DB::table('keranjangbelanja')
						    ->orderBy('ID', 'asc')->get();
    	// mengirim data pegawai ke view index
		return view('indexBelanja',['keranjangbelanja' => $keranjangbelanja]);
	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{
		// memanggil view tambah
		return view('beli');
	}

    public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->JumlahPembelian,
			'Harga' => $request->Harga
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');

	}

	// method untuk hapus data
	public function hapus($ID)
	{
		// menghapus data berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$ID)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}
}

