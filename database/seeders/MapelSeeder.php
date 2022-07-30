<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mapel::create([
            'kode_mapel' => 'MPL001',
            'nama_mapel' => 'Ilmu Pengetahuan Alam',
            'keterangan' => 'Mapel ini mengajar tentang ilmu pengetahuan Alam',
        ]);

        Mapel::create([
            'kode_mapel' => 'MPL002',
            'nama_mapel' => 'Ilmu Pengetahuan Sosial',
            'keterangan' => 'Mapel ini mengajar tentang ilmu pengetahuan Sosial',
        ]);

        Mapel::create([
            'kode_mapel' => 'MPL003',
            'nama_mapel' => 'Ilmu Pengetahuan Teknologi',
            'keterangan' => 'Mapel ini mengajar tentang ilmu pengetahuan Teknologi',
        ]);

        Mapel::create([
            'kode_mapel' => 'MPL004',
            'nama_mapel' => 'Ilmu Pengetahuan Budaya',
            'keterangan' => 'Mapel ini mengajar tentang ilmu pengetahuan Budaya',
        ]);

        Mapel::create([
            'kode_mapel' => 'MPL005',
            'nama_mapel' => 'Ilmu Pengetahuan Geografi',
            'keterangan' => 'Mapel ini mengajar tentang ilmu pengetahuan Geografi',
        ]);

        Mapel::create([
            'kode_mapel' => 'MPL006',
            'nama_mapel' => 'Ilmu Pengetahuan Ekonomi',
            'keterangan' => 'Mapel ini mengajar tentang ilmu pengetahuan Ekonomi',
        ]);

        Mapel::create([
            'kode_mapel' => 'MPL007',
            'nama_mapel' => 'Ilmu Pengetahuan Sosiologi',
            'keterangan' => 'Mapel ini mengajar tentang ilmu pengetahuan Sosiologi',
        ]);

        Mapel::create([
            'kode_mapel' => 'MPL008',
            'nama_mapel' => 'Ilmu Pengetahuan Politik',
            'keterangan' => 'Mapel ini mengajar tentang ilmu pengetahuan Politik',
        ]);

        Mapel::create([
            'kode_mapel' => 'MPL009',
            'nama_mapel' => 'Ilmu Pengetahuan Hukum',
            'keterangan' => 'Mapel ini mengajar tentang ilmu pengetahuan Hukum',
        ]);

        Mapel::create([
            'kode_mapel' => 'MPL010',
            'nama_mapel' => 'Ilmu Pengetahuan Kesehatan',
            'keterangan' => 'Mapel ini mengajar tentang ilmu pengetahuan Kesehatan',
        ]);

        Mapel::create([
            'kode_mapel' => 'MPL011',
            'nama_mapel' => 'Ilmu Pengetahuan Kebudayaan',
            'keterangan' => 'Mapel ini mengajar tentang ilmu pengetahuan Kebudayaan',
        ]);
    }
}
