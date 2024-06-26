<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minuman extends Model
{
    use HasFactory;
    protected $table = 'minumans';
    protected $fillable = ['nama', 'harga', 'deskripsi', 'gambar', 'kategori'];
}
