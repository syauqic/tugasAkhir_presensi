<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwalModel extends Model
{
    use HasFactory;

    public function dosen()
    {
        return $this->belongsToMany(dosenModel::class);
    }
    public function prodi()
    {
        return $this->belongsToMany(prodiModel::class);
    }
    public function mahasiswa()
    {
        return $this->belongsToMany(mahasiswaModel::class);
    }
    public function ruangan()
    {
        return $this->belongsToMany(ruanganModel::class);
    }
    public function matakuliah()
    {
        return $this->belongsToMany(matakuliahModel::class);
    }
    public function kelas()
    {
        return $this->belongsToMany(kelasModel::class);
    }
    public function sesi()
    {
        return $this->belongsToMany(sesiModel::class);
    }
    public function semester()
    {
        return $this->belongsToMany(semesterModel::class);
    }
}
