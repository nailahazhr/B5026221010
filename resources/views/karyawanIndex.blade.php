@extends('master')

@section('title', 'Karyawan')

@section('konten')

    <h3>Data Karyawan</h3>

    <br>
    {{-- <p class="mt-4">Cari Data Pegawai berdasarkan Nama:</p>
	<form action="/pegawai/cari" method="GET" class="d-flex">
        <input class="form-control mr-2" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
        <input class="btn btn-primary my-2 my-sm-0" type="submit" value="CARI">
    </form> --}}
    <br/>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($Karyawan as $k)
            <tr>
                <td>{{ $k->kodepegawai }}</td>
                <td>{{ strtoupper($k->namalengkap) }}</td>
                <td>{{ $k->divisi }}</td>
                <td>{{ strtolower($k->departemen) }}</td>
                <td  class="btn-group">
                    <a href="/Karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger mx-1 ">Hapus data</a>
                </td>
            </tr>
        @endforeach
    </table>

    <a href="/Karyawan/tambah" class="btn btn-primary mt-3"> + Tambah Karyawan Baru</a>

    {{-- {{ $pegawai->links() }} --}}
@endsection
