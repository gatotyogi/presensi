<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('pages.setting.index', compact('setting'));
    }

    public function update(Request $request)
    {
        $setting = Setting::findOrFail($request->id);
        $setting->update([
            'mode' => $request->mode,
            'jam_masuk' => $request->jam_masuk,
            'jam_pulang' => $request->jam_pulang,
        ]);
        Alert::success('Success', 'Setting berhasil diperbarui');
        return redirect()->route('setting.index');
    }
}
