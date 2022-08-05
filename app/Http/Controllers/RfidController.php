<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class RfidController extends Controller
{
    public function mode()
    {
        $mode = Setting::select('mode', 'jam_masuk', 'jam_pulang')->first();
        return response()->json($mode);
    }
}
