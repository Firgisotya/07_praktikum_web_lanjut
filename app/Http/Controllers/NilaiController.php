<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Mahasiswa_MataKuliah;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index(Mahasiswa $mahasiswa)
    {
        $nilai = Mahasiswa_MataKuliah::where('mahasiswa_id', $mahasiswa->id)->get();
        return view('mahasiswa.nilai', [
            'mahasiswa' => $mahasiswa,
            'nilais' => $nilai
        ]);
    }
}
