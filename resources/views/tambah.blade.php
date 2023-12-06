@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

	<h3>Data Pegawai</h3>

	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="Name" class="col-sm-1 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Nama" name="Nama">
            </div>
        </div>

        <div class="form-group row">
            <label for="Jabatan" class="col-sm-1 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Jabatan" name="Jabatan">
            </div>
        </div>

        <div class="form-group row">
            <label for="Umur" class="col-sm-1 col-form-label">Umur</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="Umur" name="Umur">
            </div>
        </div>

        <div class="form-group row">
            <label for="Alamat" class="col-sm-1 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" id="Alamat" name="Alamat"></textarea>
            </div>
        </div>
        <br>

        <a class="btn btn-success" href="/pegawai"> Kembali</a>
        <input class="btn btn-primary" type="submit" value="Simpan Data">
	</form>
    <br/>
    <br/>

@endsection
