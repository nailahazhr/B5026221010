<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		$nilaikuliah = DB::table('nilaikuliah')->get();
    	// mengirim data pegawai ke view index
		return view('nilaiIndex',['nilaikuliah' => $nilaikuliah]);
	}

	public function tambah()
	{
        // memanggil view tambah
		return view('nilaiTambah');
	}

    public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');
	}

    public function konversiNilai($nilaiAngka)
    {
        if ($nilaiAngka <= 40) {
            return 'D';
        } elseif ($nilaiAngka <= 60) {
            return 'C';
        } elseif ($nilaiAngka <= 80) {
            return 'B';
        } else {
            return 'A';
        }
    }

    public function hapus($ID)
	{
		// menghapus data berdasarkan id yang dipilih
		DB::table('nilaikuliah')->where('ID',$ID)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');
	}
}
