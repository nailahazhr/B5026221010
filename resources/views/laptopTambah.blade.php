@extends('master')

@section('title', 'Laptop')

@section('konten')

	<h3>Data Laptop</h3>

	<br/>

	<form action="/laptop/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="Merk" class="col-sm-2 col-form-label">Merk Laptop</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Merk" name="Merk">
            </div>
        </div>

        <div class="form-group row">
            <label for="Stok" class="col-sm-2 col-form-label">Stok Laptop</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="Stok" name="Stok">
            </div>
        </div>
        <br>

        <a class="btn btn-secondary" href="/laptop">Kembali</a>
        <input class="btn btn-primary" type="submit" value="Simpan Data">
	</form>
    <br/>
    <br/>

@endsection
