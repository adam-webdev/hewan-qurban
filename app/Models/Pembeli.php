<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    protected $table = 'pembelis';

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
}
