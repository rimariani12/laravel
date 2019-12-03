@extends('layout/main');

@section('title', 'Form Tambah Data Mahasiswa')

@section('container')
<div class="container">
	<div class="row">
		<div class="col-8">
			<h2 class="mt-3">Form Tambah Data Mahasiswa</h2>

     <form method="post" action="/students">
      @csrf
      <div class="form-group">
         <label for="nama">Nama</label>
         <input type="text" name="form-control" id="nama" placeholder="Masukan nama" name="nama">
       </div>
       <div class="form-group">
         <label for="nrp">NRP</label>
         <input type="text" name="form-control" id="nrp" placeholder="Masukan nrp" name="nrp">
       </div>
        <div class="form-group">
         <label for="email">Email</label>
         <input type="text" name="form-control" id="email" placeholder="Masukan email" name="email">
       </div>
        <div class="form-group">
         <label for="jurusan">Jurusan</label>
         <input type="text" name="form-control" id="jurusan" placeholder="Masukan jurusan" name="jurusan">
       </div>
       <button type="submit" class="btn btn-primary">Tambah Data!</button>
     </form>

		</div>
	</div>
</div>
@endsection