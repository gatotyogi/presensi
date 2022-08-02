<?php

namespace Database\Seeders;

use App\Models\RfidMode;
use Illuminate\Database\Seeder;

class RfidModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RfidMode::create(
            [

                'status' => '1'

            ]
        );
    }
}
