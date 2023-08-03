<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnCar extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_mobil', 'durasi_sewa', 'jumlah_biaya', 'id_pengguna'
    ];
}
