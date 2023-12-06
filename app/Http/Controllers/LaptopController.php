<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LaptopController extends Controller
{
	public function index()
	{
    	// mengambil data dari table laptop
		$laptop = DB::table('laptop')
						->orderBy('kodelaptop', 'asc')
						->paginate(10);

    	// mengirim data laptop ke view index
		return view('laptopIndex',['laptop' => $laptop]);
	}

    public function tambah()
	{
		// memanggil view tambah
		return view('laptopTambah');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table laptop sesuai pencarian data
		$laptop = DB::table('laptop')
			->where('merklaptop','like',"%".$cari."%")
			->paginate();

    	    // mengirim data pegawai ke view index
		    return view('laptopIndex',['laptop' => $laptop, 'cari' => $cari]
        );
	}

    public function store(Request $request)
	{
		// insert data ke table laptop
		DB::table('laptop')->insert([
			'merklaptop' => $request->Merk,
			'stocklaptop' => $request->Stok,
            'tersedia' => $request->Stok > 0 ? '1' : '0'
		]);
		// alihkan halaman ke halaman laptop
		return redirect('/laptop');
	}

    public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$laptop = DB::table('laptop')->where('kodelaptop',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('laptopEdit',['laptop' => $laptop]);
	}

    public function view($id)
    {
    // Dapatkan data pegawai berdasarkan ID
    $laptop = DB::table('laptop')->where('kodelaptop', $id)->get();

    // Tampilkan halaman view dengan data pegawai
    return view('laptopView', ['laptop' => $laptop]);
    }

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('laptop')->where('kodelaptop',$request->id)->update([
			'merklaptop' => $request->Merk,
			'stocklaptop' => $request->Stok,
            'tersedia' => $request->Stok > 0 ? '1' : '0'
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/laptop');
	}

    public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('laptop')->where('kodelaptop',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/laptop');
	}

    public function check($stocklaptop)
    {
        if ($stocklaptop < 1) {
            return 'unchecked';
        } else {
            return 'checked';
        }
    }
}
