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
            'kode_mapel' => 'MAPEL-1',
            'nama_mapel' => 'Matematika',
            'keterangan' => 'Matematika',
        ]);
        Mapel::create([
            'kode_mapel' => 'MAPEL-2',
            'nama_mapel' => 'Bahasa Indonesia',
            'keterangan' => 'Bahasa Indonesia',
        ]);
        Mapel::create([
            'kode_mapel' => 'MAPEL-3',
            'nama_mapel' => 'Bahasa Inggris',
            'keterangan' => 'Bahasa Inggris',
        ]);

        Mapel::create([
            'kode_mapel' => 'MAPEL-4',
            'nama_mapel' => 'Fisika',
            'keterangan' => 'Fisika',
        ]);

        Mapel::create([
            'kode_mapel' => 'MAPEL-5',
            'nama_mapel' => 'Kimia',
            'keterangan' => 'Kimia',
        ]);

        Mapel::create([
            'kode_mapel' => 'MAPEL-6',
            'nama_mapel' => 'Biologi',
            'keterangan' => 'Biologi',
        ]);

        Mapel::create([
            'kode_mapel' => 'MAPEL-7',
            'nama_mapel' => 'Sejarah',
            'keterangan' => 'Sejarah',
        ]);

        Mapel::create([
            'kode_mapel' => 'MAPEL-8',
            'nama_mapel' => 'Geografi',
            'keterangan' => 'Geografi',
        ]);

        Mapel::create([
            'kode_mapel' => 'MAPEL-9',
            'nama_mapel' => 'Ekonomi',
            'keterangan' => 'Ekonomi',
        ]);

        Mapel::create([
            'kode_mapel' => 'MAPEL-10',
            'nama_mapel' => 'Sosiologi',
            'keterangan' => 'Sosiologi',
        ]);

        Mapel::create([
            'kode_mapel' => 'MAPEL-11',
            'nama_mapel' => 'Sejarah',
            'keterangan' => 'Sejarah',
        ]);

        Mapel::create([
            'kode_mapel' => 'MAPEL-12',
            'nama_mapel' => 'Geografi',
            'keterangan' => 'Geografi',
        ]);

        Mapel::create([
            'kode_mapel' => 'MAPEL-13',
            'nama_mapel' => 'Ekonomi',
            'keterangan' => 'Ekonomi',
        ]);

        Mapel::create([
            'kode_mapel' => 'MAPEL-14',
            'nama_mapel' => 'Sosiologi',
            'keterangan' => 'Sosiologi',
        ]);

        Mapel::create([
            'kode_mapel' => 'MAPEL-15',
            'nama_mapel' => 'Sejarah',
            'keterangan' => 'Sejarah',
        ]);
    }
}
