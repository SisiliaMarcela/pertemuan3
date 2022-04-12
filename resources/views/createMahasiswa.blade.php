@extends('template.adminLTE')

@section('title', 'Tambah Data Mahasiswa')

@section('content')
<h1>Tambah Data Mahasiswa</h1>
<form>
  <div class="mb-3">
    <label for="exampleFormControlInput" class="form-label">Nama</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFomControlTextreal" class="form-lable">Jurusan</label>
    <textarea class="form-control" id="exampleFormControlTextreal" rows="3"></textarea>
</div>
<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Simpan</botton>
</div>
</form>
@endsection
