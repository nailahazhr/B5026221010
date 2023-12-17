<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Redirect;
// use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;

class KaryawanController extends Controller
{
	public function index()
	{
		$Karyawan = DB::table('Karyawan')
                    ->orderBy('namalengkap', 'asc')
                    ->get();
		return view('karyawanIndex',['Karyawan' => $Karyawan]);

	}

    public function tambah()
	{
		return view('karyawanTambah');

	}

    public function hapus($id)
	{
		DB::table('Karyawan')->where('kodepegawai',$id)->delete();
		return redirect('/Karyawan');
	}

    public function store(Request $request): RedirectResponse
    {
        try {
            DB::table('Karyawan')->insert([
                'kodepegawai' => $request->kode,
                'namalengkap' => $request->nama,
                'divisi' => $request->divisi,
                'departemen' => $request->departemen
            ]);

            return redirect('/Karyawan')
            ->with('success', 'Data karyawan berhasil ditambahkan.');

        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];

            if ($errorCode == 1062) {
                return redirect('Karyawan/tambah')
                ->with('error', 'Kode pegawai telah terdaftar.')
                ->withErrors(['Kode pegawai telah terdaftar.']);
            }

            return redirect('/Karyawan');
        }
    }
}
