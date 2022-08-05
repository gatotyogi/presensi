<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'mode' => 1,
            'jam_masuk' => '08:00',
            'jam_pulang' => '17:00',
        ]);
    }
}
