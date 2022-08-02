<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'nis';

    public $incrementing = false;

    protected $keyType = 'string';

    public function kelas()
    {
        return $this->hasOne(Kelas::class, 'kode_kelas', 'kode_kelas');
    }
}
