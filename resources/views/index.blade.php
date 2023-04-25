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
<div class="jumbotron text-center bg-white" >
  <h1>Data Mahasiswa</h1>
  <p>Sebuah CRUD sederhana untuk data Mahasiswa</p> 
</div>

<div class="container">
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@endif

@if(session('success_delete'))
    <div class="alert alert-success">
        {{ session('success_delete') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@endif

<a class="btn btn-primary text-light" href="/mahasiswa/tambah">Tambah Data</a>

  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Fakultas</th>
            <th scope="col">Prodi</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        @php
    $counter = 1;
    @endphp 
        @foreach($mahasiswa as $nim => $m)
          <tr>
            <th scope="row">{{ $counter }}</th>
            <td>{{ $m->mahasiswa_nim }}</td>
            <td>{{ $m->mahasiswa_nama }}</td>
            <td>{{ $m->mahasiswa_fakultas }}</td>
            <td>{{ $m->mahasiswa_prodi }}</td>
            <td>
            <a type="button" class="btn btn-primary"><i class="far fa-eye"></i></a>
              <a href="/mahasiswa/{{ $m->mahasiswa_nim }}/edit/" type="button" class="btn btn-success"><i class="fas fa-edit"></i></a>
            <a href="/mahasiswa/hapus/{{ $m->mahasiswa_nim }}" type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
            </td>
          </tr>
          @php
        $counter++;
    @endphp
@endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
