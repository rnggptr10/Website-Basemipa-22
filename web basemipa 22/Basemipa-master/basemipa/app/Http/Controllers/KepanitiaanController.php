<?php

namespace App\Http\Controllers;

use App\Osean;
use App\MipaMengajar;
use App\Mpc;
use App\MipaAward;
use App\MipaBersatu;
use App\Ppm;

class KepanitiaanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function osean()
    {
        $kepanitiaans = Osean::all();
        return view('kepanitiaan', compact('kepanitiaans'));
    }

    public function mipaMengajar()
    {
        $kepanitiaans = MipaMengajar::all();
        return view('kepanitiaan', compact('kepanitiaans'));
    }

    public function mpc()
    {
        $kepanitiaans = MPC::all();
        return view('kepanitiaan', compact('kepanitiaans'));
    }

    public function mipaAward()
    {
        $kepanitiaans = MipaAward::all();
        return view('kepanitiaan', compact('kepanitiaans'));
    }

    public function mipaBersatu()
    {
        $kepanitiaans = MipaBersatu::all();
        return view('kepanitiaan', compact('kepanitiaans'));
    }

    public function ppm()
    {
        $kepanitiaans = Ppm::all();
        return view('kepanitiaan', compact('kepanitiaans'));
    }
}
