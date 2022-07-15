<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosenModel extends Model
{
    use HasFactory;

    public function jadwal()
    {
        return $this->hasMany(jadwalModel::class);
    }
}
