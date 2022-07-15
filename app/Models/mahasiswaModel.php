<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswaModel extends Model
{
    use HasFactory;

    public function matakuliah()
    {
        return $this->hasMany(matakuliahModel::class);
    }
    public function orangtua()
    {
        return $this->hasOne(orangtuaModel::class);
    }
    public function kelas()
    {
        return $this->belongsTo(kelasModel::class);
    }
    public function jadwal()
    {
        return $this->hasMany(jadwalModel::class);
    }
    public function absensi()
    {
        return $this->hasMany(absensiModel::class);
    }
    public function semester()
    {
        return $this->hasOne(semesterModel::class);
    }
}
