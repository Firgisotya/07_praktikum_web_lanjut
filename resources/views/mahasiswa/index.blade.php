@extends('mahasiswa.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mt-2">
<h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
</div>
<div class="float-left my-2">
    <form action="{{ route('mahasiswa.index') }}" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
            <button class="btn btn-warning" type="submit" >Search</button>
          </div>
    </form>

    </div>
<div class="float-right my-2">
<a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
</div>
</div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div> @endif

<table class="table table-bordered">
<tr>
<th>Nim</th>
<th>Nama</th>
<th>Email</th>
<th>Tanggal Lahir</th>
<th>Kelas</th>
<th>Jurusan</th>
<th>No_Handphone</th>
<th width="280px">Action</th>
</tr>
@foreach ($mahasiswas as $Mahasiswa)
<tr>

<td>{{ $Mahasiswa->Nim }}</td>
<td>{{ $Mahasiswa->Nama }}</td>
<td>{{ $Mahasiswa->Email }}</td>
<td>{{ $Mahasiswa->Tanggal_lahir }}</td>
<td>{{ $Mahasiswa->Kelas }}</td>
<td>{{ $Mahasiswa->Jurusan }}</td>
<td>{{ $Mahasiswa->No_Handphone }}</td>
<td>
<form action="{{ route('mahasiswa.destroy',$Mahasiswa->Nim) }}" method="POST">

<a class="btn btn-info" href="{{ route('mahasiswa.show',$Mahasiswa->Nim) }}">Show</a>

<a class="btn btn-primary" href="{{ route('mahasiswa.edit',$Mahasiswa->Nim) }}">Edit</a>
@csrf
@method('DELETE')

<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
<div class="d-flex justify-content-lg-center">
    {{ $mahasiswas->links() }}
    </div>
@endsection
