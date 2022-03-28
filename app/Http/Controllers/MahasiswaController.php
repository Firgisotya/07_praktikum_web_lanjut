<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{

    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        if(request('search')){
            $mahasiswas = Mahasiswa::where('Nama', 'like', '%' . request('search') . '%')->paginate();
        }else{
            $mahasiswas = Mahasiswa::orderBy('Nim', 'asc')->paginate(5);
        }
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        //melakukan validasi data
        $validatedData = $request->validate([ 'Nim' => 'required', 'Nama' => 'required', 'Email' => 'required', 'Tanggal_lahir' => 'required', 'Kelas' => 'required',
        'Jurusan' => 'required', 'No_Handphone' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        Mahasiswa::create($validatedData);

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('mahasiswa.index')
        ->with('success', 'Mahasiswa Berhasil Ditambahkan');

    }

    public function show($Nim)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $Mahasiswa = Mahasiswa::find($Nim);
        return view('mahasiswa.detail', compact('Mahasiswa'));

    }


    public function edit($Nim)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $Mahasiswa = Mahasiswa::find($Nim);
        return view('mahasiswa.edit', compact('Mahasiswa'));

    }


    public function update(Request $request, $Nim)
    {
        //melakukan validasi data
        $validatedData = $request->validate([ 'Nim' => 'required', 'Nama' => 'required', 'Email' => 'required', 'Tanggal_lahir' => 'required', 'Kelas' => 'required',
        'Jurusan' => 'required', 'No_Handphone' => 'required',
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        Mahasiswa::find($Nim)->update($validatedData);

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('mahasiswa.index')
        ->with('success', 'Mahasiswa Berhasil Diupdate');
    }

    public function destroy($Nim)
    {
        //fungsi eloquent untuk menghapus data
        Mahasiswa::find($Nim)->delete();
        return redirect()->route('mahasiswa.index')
        -> with('success', 'Mahasiswa Berhasil Dihapus');

    }
}
