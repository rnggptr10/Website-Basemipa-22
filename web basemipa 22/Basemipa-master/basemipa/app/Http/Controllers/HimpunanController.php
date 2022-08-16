<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HimpunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->role == 'mahasiswa') {
            $himpunan = auth()->user()->himpunan;
            $users = User::all()->where('himpunan', $himpunan)->where('role', 'mahasiswa');
            return view('himpunan', ['users' => $users]);
        } else if (auth()->user()->role == 'himpunan') {
            $himpunan = auth()->user()->himpunan;
            $users = User::all()->where('himpunan', $himpunan)->where('role', 'mahasiswa');
            return view('adminhimpunan', ['users' => $users]);
        } else {
            $users = User::all()->where('role', 'mahasiswa');
            return view('adminhimpunan', ['users' => $users]);
        }
    }

    public function achievement()
    {
        $users = User::all()->where('role', 'mahasiswa')->where('achievement', '<>', '');
        return view('achievement', ['users' => $users]);
    }

    public function fmipa()
    {
        $searchdata = "searchfmipa";
        $users = User::all()->where('role', 'mahasiswa')->isEmp;
        if (auth()->user()->username == 'admin') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else {
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata]);
        }
    }

    public function himatika()
    {
        $searchdata = "searchhimatika";
        $users = User::all()->where('himpunan', 'Himatika')->where('role', 'mahasiswa');
        if (auth()->user()->username == 'admin') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else if (auth()->user()->role == 'himpunan' && auth()->user()->himpunan == 'Himatika') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else {
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata]);
        }
    }

    public function himaka()
    {
        $searchdata = "searchhimaka";
        $users = User::all()->where('himpunan', 'Himaka')->where('role', 'mahasiswa');
        if (auth()->user()->username == 'admin') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else if (auth()->user()->role == 'himpunan' && auth()->user()->himpunan == 'Himaka') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else {
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata]);
        }
    }

    public function hifi()
    {
        $searchdata = "searchhifi";
        $users = User::all()->where('himpunan', 'Hifi')->where('role', 'mahasiswa');
        if (auth()->user()->username == 'admin') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else if (auth()->user()->role == 'himpunan' && auth()->user()->himpunan == 'Hifi') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else {
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata]);
        }
    }

    public function himbio()
    {
        $searchdata = "searchhimbio";
        $users = User::all()->where('himpunan', 'Himbio')->where('role', 'mahasiswa');
        if (auth()->user()->username == 'admin') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else if (auth()->user()->role == 'himpunan' && auth()->user()->himpunan == 'Himbio') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else {
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata]);
        }
    }

    public function himasta()
    {
        $searchdata = "searchhimasta";
        $users = User::all()->where('himpunan', 'Himasta')->where('role', 'mahasiswa');
        if (auth()->user()->username == 'admin') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else if (auth()->user()->role == 'himpunan' && auth()->user()->himpunan == 'Himasta') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else {
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata]);
        }
    }

    public function pedra()
    {
        $searchdata = "searchpedra";
        $users = User::all()->where('himpunan', 'Pedra')->where('role', 'mahasiswa');
        if (auth()->user()->username == 'admin') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else if (auth()->user()->role == 'himpunan' && auth()->user()->himpunan == 'Pedra') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else {
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata]);
        }
    }

    public function himatif()
    {
        $searchdata = "searchhimatif";
        $users = User::all()->where('himpunan', 'Himatif')->where('role', 'mahasiswa');
        if (auth()->user()->username == 'admin') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else if (auth()->user()->role == 'himpunan' && auth()->user()->himpunan == 'Himatif') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else {
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata]);
        }
    }

    public function hmte()
    {
        $searchdata = "searchhmte";
        $users = User::all()->where('himpunan', 'Hmte')->where('role', 'mahasiswa');
        if (auth()->user()->username == 'admin') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else if (auth()->user()->role == 'himpunan' && auth()->user()->himpunan == 'Hmte') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else {
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata]);
        }
    }

    public function himaktu()
    {
        $searchdata = "searchhimaktu";
        $users = User::all()->where('himpunan', 'Himaktu')->where('role', 'mahasiswa');
        if (auth()->user()->username == 'admin') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else if (auth()->user()->role == 'himpunan' && auth()->user()->himpunan == 'Himaktu') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else {
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata]);
        }
    }

    public function himatologika()
    {
        $searchdata = "searchhimatologika";
        $users = User::all()->where('himpunan', 'Himatologika')->where('role', 'mahasiswa');
        if (auth()->user()->username == 'admin') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else if (auth()->user()->role == 'himpunan' && auth()->user()->himpunan == 'Himatologika') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else {
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata]);
        }
    }

    public function searchfmipa(Request $request)
    {
        // menangkap data pencarian
        $searchdata = "searchfmipa";
        $search = $request->search;
        $users = User::where('role', 'mahasiswa')
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
                $query->orWhere('username', 'LIKE', '%' . $search . '%');
            })->get();
        if (count($users) > 0)
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withDetails($users)->withQuery($search);
        else return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withMessage('No Details found. Try to search again !');
    }

    public function searchhimatika(Request $request)
    {
        // menangkap data pencarian
        $searchdata = "searchhimatika";
        $search = $request->search;
        $users = User::where('himpunan', 'Himatika')->where('role', 'mahasiswa')
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
                $query->orWhere('username', 'LIKE', '%' . $search . '%');
            })->get();
        if (count($users) > 0)
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withDetails($users)->withQuery($search);
        else return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withMessage('No Details found. Try to search again !');
    }

    public function searchhimaka(Request $request)
    {
        // menangkap data pencarian
        $searchdata = "searchhimaka";
        $search = $request->search;
        $users = User::where('himpunan', 'Himaka')->where('role', 'mahasiswa')
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
                $query->orWhere('username', 'LIKE', '%' . $search . '%');
            })->get();
        if (count($users) > 0)
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withDetails($users)->withQuery($search);
        else return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withMessage('No Details found. Try to search again !');
    }

    public function searchhifi(Request $request)
    {
        // menangkap data pencarian
        $searchdata = "searchhifi";
        $search = $request->search;
        $users = User::where('himpunan', 'Hifi')->where('role', 'mahasiswa')
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
                $query->orWhere('username', 'LIKE', '%' . $search . '%');
            })->get();
        if (count($users) > 0)
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withDetails($users)->withQuery($search);
        else return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withMessage('No Details found. Try to search again !');
    }

    public function searchhimbio(Request $request)
    {
        // menangkap data pencarian
        $searchdata = "searchhimbio";
        $search = $request->search;
        $users = User::where('himpunan', 'Himbio')->where('role', 'mahasiswa')
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
                $query->orWhere('username', 'LIKE', '%' . $search . '%');
            })->get();
        if (count($users) > 0)
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withDetails($users)->withQuery($search);
        else return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withMessage('No Details found. Try to search again !');
    }

    public function searchhimasta(Request $request)
    {
        // menangkap data pencarian
        $searchdata = "searchfmipa";
        $search = $request->search;
        $users = User::where('himpunan', 'Himasta')->where('role', 'mahasiswa')
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
                $query->orWhere('username', 'LIKE', '%' . $search . '%');
            })->get();
        if (count($users) > 0)
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withDetails($users)->withQuery($search);
        else return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withMessage('No Details found. Try to search again !');
    }

    public function searchpedra(Request $request)
    {
        // menangkap data pencarian
        $searchdata = "searchpedra";
        $search = $request->search;
        $users = User::where('himpunan', 'Pedra')->where('role', 'mahasiswa')
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
                $query->orWhere('username', 'LIKE', '%' . $search . '%');
            })->get();
        if (count($users) > 0)
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withDetails($users)->withQuery($search);
        else return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withMessage('No Details found. Try to search again !');
    }

    public function searchhimatif(Request $request)
    {
        // menangkap data pencarian
        $searchdata = "searchfmipa";
        $search = $request->search;
        $users = User::where('himpunan', 'Himatif')->where('role', 'mahasiswa')
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
                $query->orWhere('username', 'LIKE', '%' . $search . '%');
            })->get();
        if (count($users) > 0)
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withDetails($users)->withQuery($search);
        else return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withMessage('No Details found. Try to search again !');
    }

    public function searchhmte(Request $request)
    {
        // menangkap data pencarian
        $searchdata = "searchhmte";
        $search = $request->search;
        $users = User::where('himpunan', 'Hmte')->where('role', 'mahasiswa')
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
                $query->orWhere('username', 'LIKE', '%' . $search . '%');
            })->get();
        if (count($users) > 0)
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withDetails($users)->withQuery($search);
        else return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withMessage('No Details found. Try to search again !');
    }

    public function searchhimaktu(Request $request)
    {
        // menangkap data pencarian
        $searchdata = "searchhimaktu";
        $search = $request->search;
        $users = User::where('himpunan', 'Himaktu')->where('role', 'mahasiswa')
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
                $query->orWhere('username', 'LIKE', '%' . $search . '%');
            })->get();
        if (count($users) > 0)
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withDetails($users)->withQuery($search);
        else return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withMessage('No Details found. Try to search again !');
    }

    public function searchhimatologika(Request $request)
    {
        // menangkap data pencarian
        $searchdata = "searchhimatologika";
        $search = $request->search;
        $users = User::where('himpunan', 'Himatologika')->where('role', 'mahasiswa')
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
                $query->orWhere('username', 'LIKE', '%' . $search . '%');
            })->get();
        if (count($users) > 0)
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withDetails($users)->withQuery($search);
        else return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withMessage('No Details found. Try to search again !');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Himatif  $himatif
     * @return \Illuminate\Http\Response
     */
    public function show(Himatif $himatif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Himatif  $himatif
     * @return \Illuminate\Http\Response
     */
    public function edit(Himatif $himatif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Himatif  $himatif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Himatif $himatif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Himatif  $himatif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Himatif $himatif)
    {
        //
    }
}
