@extends('layout.main')
@section('content')
<h1>Tambah Data Transaksi</h1>
<form action="{{ asset('dosen/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="id" value="<?php echo $dosen->id ?>">
Nama Dosen <input type="text" name="nama_dosen" value="<?php echo $dosen->nama_dosen ?>"><br>
Alamat Dosen <input type="text" name="alamat_dosen" value="<?php echo $dosen->alamat_dosen ?>"><br>
No HP <input type="text" name="hp" value="<?php echo $dosen->hp ?>"><br>
<input type="submit" value="Simpan">
</form>   
@endsection  