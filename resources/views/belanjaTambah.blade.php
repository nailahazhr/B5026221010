@extends('master')

@section('title', 'Keranjang Belanja')

@section('konten')

	<h3>Keranjang Belanja</h3>

	<br/>

	<form action="/keranjangbelanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="Kode Barang" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="KodeBarang" name="KodeBarang">
            </div>
        </div>

        <div class="form-group row">
            <label for="Jumlah Pembelian" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="JumlahPembelian" name="JumlahPembelian">
            </div>
        </div>

        <div class="form-group row">
            <label for="Harga per item" class="col-sm-2 col-form-label">Harga per item</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="Harga" name="Harga">
            </div>
        </div>

        <br>

        <a class="btn btn-success" href="/keranjangbelanja"> Kembali</a>
        <input class="btn btn-primary" type="submit" value="Tambah">
	</form>
    <br/>
    <br/>

@endsection
