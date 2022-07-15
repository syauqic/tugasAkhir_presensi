<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelasModel extends Model
{
    use HasFactory;

    public function mahasiswa()
    {
        return $this->hasMany(mahasiswaModel::class);
    }
    public function jadwal()
    {
        return $this->hasMany(jadwalModel::class);
    }
    public function absensi()
    {
        return $this->hasMany(absensiModel::class);
    }
}
