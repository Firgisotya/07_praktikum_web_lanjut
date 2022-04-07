<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table="mahasiswas"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps= false;
    protected $primaryKey = 'Nim'; // Memanggil isi DB Dengan primarykey

    protected $fillable = [
        'Nim',
        'Nama',
        'Email',
        'Tanggal_lahir',
        'Kelas',
        'Jurusan',
        'No_Handphone',
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function mahasiswa_matakuliah(){
        return $this->hasMany(Mahasiswa_MataKuliah::class);
    }
}
