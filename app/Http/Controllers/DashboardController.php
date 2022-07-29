<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $data = [
            'total_admin' => User::role('admin')->count(),
            'total_guru' => User::role('guru')->count(),
            'total_siswa' => User::role('siswa')->count()

        ];

        // for ($bulan = 1; $bulan < 13; $bulan++) {
        //     $chartuser     = collect(DB::SELECT("SELECT count(id) AS jumlah from users where month(created_at)='$bulan'"))->first();
        //     $chart_user[] = $chartuser->jumlah;
        // }
        return view('pages.dashboard.index', compact('data'));
    }
}
