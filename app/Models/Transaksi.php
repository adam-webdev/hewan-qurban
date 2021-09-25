<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksis';

    public function sapi()
    {
        return $this->belongsTo(Sapi::class);
    }
    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class);
    }
}
