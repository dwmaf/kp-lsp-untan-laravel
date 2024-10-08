<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = [
        'link_foto',
        'image_public_id',
        'judul_berita',
        'konten_berita',
        'excerpt'
    ];
}
