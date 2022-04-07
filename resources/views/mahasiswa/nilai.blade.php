@extends('mahasiswa.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mt-2">
<h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
</div>
    <h2><center>KARTU HASIL STUDI (KHS)</center></h2>
</div>
</div>

<h4>Nim : {{ $mahasiswa->Nim }}</h4>
<h4>Nama : {{ $mahasiswa->Nama }}</h4>
<h4>Kelas : {{ $mahasiswa->kelas->nama_kelas }}</h4>
<table class="table table-bordered">
<tr>
<th>Matakuliah</th>
<th>Sks</th>
<th>Semester</th>
<th>Nilai</th>
</tr>
@foreach ($nilais as $nilai)
<tr>
<td>{{ $nilai->matakuliah->nama_matkul }}</td>
<td>{{ $nilai->matakuliah->sks }}</td>
<td>{{ $nilai->matakuliah->semester }}</td>
<td>{{ $nilai->nilai }}</td>
</tr>
@endforeach
</table>

@endsection
