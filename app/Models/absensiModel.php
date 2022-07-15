<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensiModel extends Model
{
    use HasFactory;

    public function matakuliah()
    {
        return $this->belongsToMany(matakuliahModel::class);
    }
    public function kelas()
    {
        return $this->belongsToMany(kelasModel::class);
    }
    public function status()
    {
        return $this->belongsToMany(statusModel::class);
    }
    public function prodi()
    {
        return $this->belongsToMany(prodiModel::class);
    }
    public function keterangan()
    {
        return $this->belongsToMany(keteranganModel::class);
    }
    public function mahasiswa()
    {
        return $this->belongsToMany(mahasiswaModel::class);
    }
    public function semester()
    {
        return $this->belongsToMany(semesterModel::class);
    }
}
