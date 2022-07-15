<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodiModel extends Model
{
    use HasFactory;

    public function matakuliah()
    {
        return $this->hasMany(matakuliahModel::class);
    }
    public function jadwan()
    {
        return $this->hasMany(jadwalModel::class);
    }
    public function absensi()
    {
        return $this->hasMany(absensiModel::class);
    }
    public function semester()
    {
        return $this->hasMany(semesterModel::class);
    }
}
