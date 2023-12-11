<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class KaryawanController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
		$Karyawan = DB::table('Karyawan')
						->orderBy('namalengkap', 'asc')
						->paginate(10);
    	// mengirim data pegawai ke view index
		return view('karyawanIndex',['Karyawan' => $Karyawan]);

	}

    public function tambah()
	{
		// memanggil view tambah
		return view('karyawanTambah');

	}

    public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('Karyawan')->where('kodepegawai',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/Karyawan');
	}

    public function store(Request $request)
    {
        DB::table('Karyawan')->insert([
            'kodepegawai' => $request->kode,
            'namalengkap' => $request->nama,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        $validator = Validator::make($request->all(), [
            'kodepegawai' => 'required|unique:Karyawan'
        ], [
            'kodepegawai' => 'Kode pegawai telah terdaftar.',
        ]);

        // Jika validasi gagal, kembali ke halaman tambah dengan pesan kesalahan
        if ($validator->fails()) {
            return redirect('Karyawan/tambah')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Kode pegawai telah terdaftar.');
        }

        return redirect('/Karyawan');
    }
}
