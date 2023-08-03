<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_mobil', 'tanggal_mulai', 'tanggal_selesai', 'id_pengguna'
    ];
}
