<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable=[
        'nama_kursus',
        'deskripsi',
        'durasi',
        'slug'
    ];

    public function materi(){
        return $this->hasMany(Materi::class);
    }
}
