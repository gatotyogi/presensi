<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RfidTmp extends Model
{
    use HasFactory;


    protected $fillable = [
        'nomor_kartu'
    ];
}
