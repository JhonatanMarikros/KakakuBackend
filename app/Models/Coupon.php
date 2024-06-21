<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'deskripsi', 'jumlah', 'gambar', 'claimed_by'
    ];

    public function claimedByUser()
    {
        return $this->belongsTo(User::class, 'claimed_by');
    }

}
