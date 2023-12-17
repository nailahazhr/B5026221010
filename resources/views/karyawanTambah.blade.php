@extends('master')

@section('title', 'Karyawan')

@section('konten')

	<h3>Tambah Data Karyawan</h3>

	<br/>

    @if ($errors->any())
        <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </div>
    @endif

	<form action="/Karyawan/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="kode" class="col-sm-3 col-form-label">Kode Pegawai</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="kode" name="kode">
            </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>

        <div class="form-group row">
            <label for="divisi" class="col-sm-3 col-form-label">Divisi</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="divisi" name="divisi">
            </div>
        </div>

        <div class="form-group row">
            <label for="departemen" class="col-sm-3 col-form-label">Departemen</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="departemen" name="departemen">
            </div>
        </div>
        <br>

        <a class="btn btn-success" href="/Karyawan"> Kembali</a>
        <input class="btn btn-primary" type="submit" value="Simpan Data">
	</form>
    <br/>
    <br/>

@endsection
