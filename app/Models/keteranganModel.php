<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keteranganModel extends Model
{
    use HasFactory;

    public function absens()
    {
        return $this->hasOne(absensiModel::class);
    }
}
