<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            'kode_kelas' => 'KELAS-1',
            'nama_kelas' => 'Kelas 1',
            'keterangan' => 'Kelas 1',
        ]);
        Kelas::create([
            'kode_kelas' => 'KELAS-2',
            'nama_kelas' => 'Kelas 2',
            'keterangan' => 'Kelas 2',
        ]);
        Kelas::create([
            'kode_kelas' => 'KELAS-3',
            'nama_kelas' => 'Kelas 3',
            'keterangan' => 'Kelas 3',
        ]);
    }
}
