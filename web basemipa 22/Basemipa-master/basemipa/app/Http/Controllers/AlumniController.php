<?php

namespace App\Http\Controllers;


use App\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
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
            $users = Alumni::all()->where('himpunan', $himpunan)->where('role', 'alumni');
            return view('alumni', ['users' => $users]);
        } else if (auth()->user()->role == 'himpunan') {
            $himpunan = auth()->user()->himpunan;
            $users = Alumni::all()->where('himpunan', $himpunan)->where('role', 'alumni');
            return view('adminhimpunan', ['users' => $users]);
        } else {
            $users = Alumni::all()->where('role', 'alumni');
            return view('adminhimpunan', ['users' => $users]);
        }
    }

    public function himatika()
    {
        $searchdata = "searchhimatika";
        $users = Alumni::all()->where('himpunan', 'Himatika')->where('role', 'alumni');
        if (auth()->user()->username == 'admin') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else if (auth()->user()->role == 'himpunan' && auth()->user()->himpunan == 'Himatika') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else {
            return view('alumni', ['users' => $users], ['searchdata' => $searchdata]);
        }
    }

    public function himaka()
    {
        $searchdata = "searchhimaka";
        $users = Alumni::all()->where('himpunan', 'Himaka')->where('role', 'alumni');
        if (auth()->user()->username == 'admin') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else if (auth()->user()->role == 'himpunan' && auth()->user()->himpunan == 'Himaka') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else {
            return view('alumni', ['users' => $users], ['searchdata' => $searchdata]);
        }
    }

    public function hifi()
    {
        $searchdata = "searchhifi";
        $users = Alumni::all()->where('himpunan', 'Hifi')->where('role', 'alumni');
        if (auth()->user()->username == 'admin') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else if (auth()->user()->role == 'himpunan' && auth()->user()->himpunan == 'Hifi') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else {
            return view('alumni', ['users' => $users], ['searchdata' => $searchdata]);
        }
    }

    public function himbio()
    {
        $searchdata = "searchhimbio";
        $users = Alumni::all()->where('himpunan', 'Himbio')->where('role', 'alumni');
        if (auth()->user()->username == 'admin') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else if (auth()->user()->role == 'himpunan' && auth()->user()->himpunan == 'Himbio') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else {
            return view('alumni', ['users' => $users], ['searchdata' => $searchdata]);
        }
    }

    public function himasta()
    {
        $searchdata = "searchhimasta";
        $users = Alumni::all()->where('himpunan', 'Himasta')->where('role', 'alumni');
        if (auth()->user()->username == 'admin') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else if (auth()->user()->role == 'himpunan' && auth()->user()->himpunan == 'Himasta') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else {
            return view('alumni', ['users' => $users], ['searchdata' => $searchdata]);
        }
    }

    public function pedra()
    {
        $searchdata = "searchpedra";
        $users = Alumni::all()->where('himpunan', 'Pedra')->where('role', 'alumni');
        if (auth()->user()->username == 'admin') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else if (auth()->user()->role == 'himpunan' && auth()->user()->himpunan == 'Pedra') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else {
            return view('alumni', ['users' => $users], ['searchdata' => $searchdata]);
        }
    }

    public function himatif()
    {
        $searchdata = "searchhimatif";
        $users = Alumni::all()->where('himpunan', 'Himatif')->where('role', 'alumni');
        if (auth()->user()->username == 'admin') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else if (auth()->user()->role == 'himpunan' && auth()->user()->himpunan == 'Himatif') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else {
            return view('alumni', ['users' => $users], ['searchdata' => $searchdata]);
        }
    }

    public function hmte()
    {
        $searchdata = "searchhmte";
        $users = Alumni::all()->where('himpunan', 'Hmte')->where('role', 'alumni');
        if (auth()->user()->username == 'admin') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else if (auth()->user()->role == 'himpunan' && auth()->user()->himpunan == 'Hmte') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else {
            return view('alumni', ['users' => $users], ['searchdata' => $searchdata]);
        }
    }

    public function himaktu()
    {
        $searchdata = "searchhimaktu";
        $users = Alumni::all()->where('himpunan', 'Himaktu')->where('role', 'alumni');
        if (auth()->user()->username == 'admin') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else if (auth()->user()->role == 'himpunan' && auth()->user()->himpunan == 'Himaktu') {
            return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
        } else {
            return view('alumni', ['users' => $users], ['searchdata' => $searchdata]);
        }
    }

    // public function tekim()
    // {
    //     $searchdata = "searchtekim";
    //     $users = Alumni::all()->where('himpunan', 'Tekim')->where('role', 'alumni');
    //     if (auth()->user()->username == 'admin') {
    //         return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
    //     } else if (auth()->user()->role == 'himpunan' && auth()->user()->himpunan == 'Tekim') {
    //         return view('adminhimpunan', ['users' => $users], ['searchdata' => $searchdata]);
    //     } else {
    //         return view('alumni', ['users' => $users], ['searchdata' => $searchdata]);
    //     }
    // }

    // public function searchfmipa(Request $request)
    // {
    //     // menangkap data pencarian
    //     $searchdata = "searchfmipa";
    //     $search = $request->search;
    //     $users = Alumni::where('role', 'alumni')
    //         ->where(function ($query) use ($search) {
    //             $query->where('name', 'LIKE', '%' . $search . '%');
    //             $query->orWhere('username', 'LIKE', '%' . $search . '%');
    //         })->get();
    //     if (count($users) > 0)
    //         return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withDetails($users)->withQuery($search);
    //     else return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withMessage('No Details found. Try to search again !');
    // }

    public function searchhimatika(Request $request)
    {
        // menangkap data pencarian
        $searchdata = "searchhimatika";
        $search = $request->search;
        $users = Alumni::where('himpunan', 'Himatika')->where('role', 'alumni')
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
        $users = Alumni::where('himpunan', 'Himaka')->where('role', 'alumni')
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
        $users = Alumni::where('himpunan', 'Hifi')->where('role', 'alumni')
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
        $users = Alumni::where('himpunan', 'Himbio')->where('role', 'alumni')
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
        $users = Alumni::where('himpunan', 'Himasta')->where('role', 'alumni')
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
        $users = Alumni::where('himpunan', 'Pedra')->where('role', 'alumni')
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
        $users = Alumni::where('himpunan', 'Himatif')->where('role', 'alumni')
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
        $users = Alumni::where('himpunan', 'Hmte')->where('role', 'alumni')
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
        $users = Alumni::where('himpunan', 'Himaktu')->where('role', 'alumni')
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
                $query->orWhere('username', 'LIKE', '%' . $search . '%');
            })->get();
        if (count($users) > 0)
            return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withDetails($users)->withQuery($search);
        else return view('himpunan', ['users' => $users], ['searchdata' => $searchdata])->withMessage('No Details found. Try to search again !');
    }

    public function searchtekim(Request $request)
    {
        // menangkap data pencarian
        $searchdata = "searchtekim";
        $search = $request->search;
        $users = Alumni::where('himpunan', 'Tekim')->where('role', 'alumni')
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
