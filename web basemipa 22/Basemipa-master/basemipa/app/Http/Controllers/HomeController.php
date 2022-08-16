<?php

namespace App\Http\Controllers;

use App\User;
use App\Bem;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
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
    public function index(User $model)
    {
        $jumlahMipa = User::where('role','mahasiswa')->count();
        $jumlahHimatika = User::where('himpunan','himatika')->where('role','mahasiswa')->count();
        $jumlahHimaka = User::where('himpunan','himaka')->where('role','mahasiswa')->count();
        $jumlahHifi = User::where('himpunan','hifi')->where('role','mahasiswa')->count();
        $jumlahHimbio = User::where('himpunan','himbio')->where('role','mahasiswa')->count();
        $jumlahHimasta = User::where('himpunan','himasta')->where('role','mahasiswa')->count();
        $jumlahPedra = User::where('himpunan','pedra')->where('role','mahasiswa')->count();
        $jumlahHimatif = User::where('himpunan','himatif')->where('role','mahasiswa')->count();
        $jumlahHmte = User::where('himpunan','hmte')->where('role','mahasiswa')->count();
        $jumlahHimaktu = User::where('himpunan','himaktu')->where('role','mahasiswa')->count();
        $jumlahHimatologika = User::where('himpunan','himatologika')->where('role','mahasiswa')->count();
        $users = User::all();
        if (auth()->user()->username == 'admin') {
            return view('home', ['users' => $users]);
        } else {
            return view('home', [   'users' => $users,
                                    'jumlahMipa'=>$jumlahMipa, 
                                    'jumlahHimatika'=>$jumlahHimatika, 
                                    'jumlahHimaka'=>$jumlahHimaka,
                                    'jumlahHifi'=>$jumlahHifi,
                                    'jumlahHimbio'=>$jumlahHimbio,
                                    'jumlahHimasta'=>$jumlahHimasta,
                                    'jumlahPedra'=>$jumlahPedra,
                                    'jumlahHimatif'=>$jumlahHimatif,
                                    'jumlahHmte'=>$jumlahHmte,
                                    'jumlahHimaktu'=>$jumlahHimaktu,
                                    'jumlahHimatologika'=>$jumlahHimatologika,
                                ]);
        }
        return view('home', [   'users' => $users,
                                'jumlahMipa'=>$jumlahMipa,
                                'jumlahHimatika'=>$jumlahHimatika,
                                'jumlahHimaka'=>$jumlahHimaka,
                                'jumlahHifi'=>$jumlahHifi,
                                'jumlahHimbio'=>$jumlahHimbio,
                                'jumlahHimasta'=>$jumlahHimasta,
                                'jumlahPedra'=>$jumlahPedra,
                                'jumlahHimatif'=>$jumlahHimatif,
                                'jumlahHmte'=>$jumlahHmte,
                                'jumlahHimaktu'=>$jumlahHimaktu,
                                'jumlahHimatologika'=>$jumlahHimatologika,
                            ]);
    }

    public function admin(User $model)
    {
        $users = User::all();
        return view('adminhome', ['users' => $users]);
    }

    public function bem()
    {
        $bems = Bem::all();
        return view('bem', ['bems' => $bems]);
    }
}
