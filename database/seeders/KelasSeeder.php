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
            'kode_kelas' => 'KLS001',
            'nama_kelas' => 'XI RPL 1',
            'keterangan' => 'Kelas ini mengajar tentang RPL',
        ]);

        Kelas::create([
            'kode_kelas' => 'KLS002',
            'nama_kelas' => 'XI RPL 2',
            'keterangan' => 'Kelas ini mengajar tentang RPL',
        ]);

        Kelas::create([
            'kode_kelas' => 'KLS003',
            'nama_kelas' => 'XI RPL 3',
            'keterangan' => 'Kelas ini mengajar tentang RPL',
        ]);

        Kelas::create([
            'kode_kelas' => 'KLS004',
            'nama_kelas' => 'XI RPL 4',
            'keterangan' => 'Kelas ini mengajar tentang RPL',
        ]);

        Kelas::create([
            'kode_kelas' => 'KLS005',
            'nama_kelas' => 'XI RPL 5',
            'keterangan' => 'Kelas ini mengajar tentang RPL',
        ]);

        Kelas::create([
            'kode_kelas' => 'KLS006',
            'nama_kelas' => 'XI RPL 6',
            'keterangan' => 'Kelas ini mengajar tentang RPL',
        ]);

        Kelas::create([
            'kode_kelas' => 'KLS007',
            'nama_kelas' => 'XI RPL 7',
            'keterangan' => 'Kelas ini mengajar tentang RPL',
        ]);

        Kelas::create([
            'kode_kelas' => 'KLS008',
            'nama_kelas' => 'XI RPL 8',
            'keterangan' => 'Kelas ini mengajar tentang RPL',
        ]);

        Kelas::create([
            'kode_kelas' => 'KLS009',
            'nama_kelas' => 'XI RPL 9',
            'keterangan' => 'Kelas ini mengajar tentang RPL',
        ]);

        Kelas::create([
            'kode_kelas' => 'KLS010',
            'nama_kelas' => 'XI RPL 10',
            'keterangan' => 'Kelas ini mengajar tentang RPL',
        ]);

        Kelas::create([
            'kode_kelas' => 'KLS011',
            'nama_kelas' => 'XI RPL 11',
            'keterangan' => 'Kelas ini mengajar tentang RPL',
        ]);
    }
}
