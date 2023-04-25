<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
</style>
</head>
<body>
<div>

<form class="container" id="needs-validation" novalidate action="{{ route('mahasiswa.store') }}" method="post">
  <div class="jumbotron text-center bg-white" >
    <h1>Tambah Data</h1>
    <p>Sebuah CRUD sederhana untuk data Mahasiswa</p> 
  </div>
  <div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
      {{ csrf_field() }}
      <div class="form-group">
        <label >NIM</label>
        <input name="nim" type="text" class="form-control" placeholder="Enter email">
        <small class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label>Nama</label>
        <input name="nama" type="text" class="form-control" placeholder="Enter email">
        <small  type="text" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label>Fakultas</label>
        <input name="fakultas"  type="text" class="form-control" placeholder="Enter email">
        <small  type="text" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label>Prodi</label>
        <input name="prodi" type="text" class="form-control" placeholder="Enter email">
        <small  type="text" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <input name="alamat" type="email" class="form-control" placeholder="Enter email">
        <small  type="text" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <input type="submit" value="Tambah Data" class="btn btn-primary text-light"></input>
      <a href="{{ url('/mahasiswa') }}" class="btn btn-secondary">Kembali</a>
    </div>
  </form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
