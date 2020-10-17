<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Not extends Model
{
    protected $table="not";
    use HasFactory;

    public function kategori() {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }
}
