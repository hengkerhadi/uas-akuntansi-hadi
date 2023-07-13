@extends('layout.main')
@section('content')

<h1>Master data Dosen</h1>
<div class="card">
<div class="card-header">

<h1>Tambah Data Dosen</h1>
<form action="{{ asset('dosen/tambah_proses') }}" method="POST">
@csrf
Nama Dosen <input type="text" name="nama_dosen"><br>
Alamat Dosen <input type="text" name="alamat_dosen"><br>
No HP <input type="text" name="hp"><br>
<input type="submit" value="Simpan">
</form>   

</div>
</div>
@endsection