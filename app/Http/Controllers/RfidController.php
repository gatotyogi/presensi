<?php

namespace App\Http\Controllers;

use App\Models\RfidMode;
use Illuminate\Http\Request;

class RfidController extends Controller
{
    public function index()
    {
        return 1;
    }

    public function mode()
    {
        $mode = RfidMode::first();
        $mode_absen = $mode->status + 1;
        if ($mode_absen > 2) {
            $mode_absen = 1;
        }
        $mode->status = $mode_absen;
        $mode->save();
        return $mode_absen;
    }

    public function card(Request $request)
    {
        dd($request->all());
    }
}
