<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Nilai;

class Mahasiswa extends Model
{
    use HasFactory;
    
    public function nilais()
{
    return $this->hasMany(Nilai::class);
}
    protected $guarded = ['id'];
}
