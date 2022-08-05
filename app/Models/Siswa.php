<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'kelas_id',
        'user_id',
        'nisn',
        'nama',
        'email',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'no_kartu',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
