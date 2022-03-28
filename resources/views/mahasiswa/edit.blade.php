@extends('mahasiswa.layout')
@section('content')
<div class="container mt-5">

<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header"> Edit Mahasiswa</div>
<div class="card-body">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form method="POST" action="{{ route('mahasiswa.update', $Mahasiswa->Nim) }}" id="myForm">
@csrf
@method('PUT')
<div class="form-group">
    <label for="Nim">Nim</label>
    <input type="text" name="Nim" class="form-control" id="Nim" value="{{ $Mahasiswa->Nim }}" aria- describedby="Nim" >
    </div>
    <div class="form-group">
    <label for="Nama">Nama</label>
    <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $Mahasiswa->Nama }}" aria- describedby="Nama" >
    </div>
    <div class="form-group">
        <label for="Email">Email</label>
        <input type="email" name="Email" class="form-control" id="Email" value="{{ $Mahasiswa->Email }}" aria- describedby="Email" >
    </div>
    <div class="form-group">
        <label for="Tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="Tanggal_lahir" class="form-control" id="Tanggal_lahir" value="{{ $Mahasiswa->Tanggal_lahir }}" aria- describedby="Tanggal_lahir" >
    </div>
    <div class="form-group">
    <label for="Kelas">Kelas</label>
    <input type="text" name="Kelas" class="form-control" id="Kelas" value="{{ $Mahasiswa->Kelas }}" aria- describedby="Kelas" >
    </div>
    <div class="form-group">
    <label for="Jurusan">Jurusan</label>
    <input type="text" name="Jurusan" class="form-control" id="Jurusan" value="{{ $Mahasiswa->Jurusan }}" aria- describedby="Jurusan" >
    </div>
    <div class="form-group">
    <label for="No_Handphone">No_Handphone</label>
    <input type="text" name="No_Handphone" class="form-control" id="No_Handphone" value="{{ $Mahasiswa->No_Handphone }}" aria- describedby="No_Handphone" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    @endsection


