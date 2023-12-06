@extends('master')

@section('title', 'Nilai Kuliah')

@section('konten')

	<h3>Nilai Kuliah</h3>

	<br/>

	<form action="/nilaikuliah/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="NRP" class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="NRP" name="NRP">
            </div>
        </div>

        <div class="form-group row">
            <label for="Nilai Angka" class="col-sm-2 col-form-label">Nilai Angka</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="NilaiAngka" name="NilaiAngka">
            </div>
        </div>

        <div class="form-group row">
            <label for="SKS" class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="SKS" name="SKS">
            </div>
        </div>

        <br>

        <a class="btn btn-success" href="/nilaikuliah">Kembali</a>
        <input class="btn btn-primary" type="submit" value="Tambah">
	</form>
    <br/>
    <br/>

@endsection
