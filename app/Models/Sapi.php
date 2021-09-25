<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sapi extends Model
{
    use HasFactory;
    protected $table = 'sapis';

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
}
