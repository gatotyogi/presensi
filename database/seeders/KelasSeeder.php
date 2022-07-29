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
            'nama_kelas' => 'Kelas X DKV 1',
            'keterangan' => 'Kelas X DKV 1'
        ]);

        Kelas::create([
            'nama_kelas' => 'Kelas X DKV 2',
            'keterangan' => 'Kelas X DKV 2'
        ]);
    }
}
