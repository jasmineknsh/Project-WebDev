<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;
    protected $fillable=[
        'judul',
        'deskripsi',
        'link_materi',
        'course_id'
    ];

    public function kursus(){
        return $this->belongsTo(Course::class);
    }
}

