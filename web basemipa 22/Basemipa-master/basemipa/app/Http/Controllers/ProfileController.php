<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('profile.edit');
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        // di bawah ini proses update tabel kendaraan, jika kolom id sama dengan $id yang dikirim dari form
        $id = auth()->user()->id;

        $user = User::find($id);
        if ($request->email != NULL)
            $user->email = $request->email;

        if ($request->phone_number != NULL)
            $user->phone_number = $request->phone_number;

        if ($request->phone_number_guardians != NULL)
            $user->phone_number_guardians = $request->phone_number_guardians;

        if ($request->religion != NULL)
            $user->religion = $request->religion;

        if ($request->address != NULL)
            $user->address = $request->address;

        if ($request->address_2 != NULL)
            $user->address_2 = $request->address_2;

        if ($request->tk != NULL)
            $user->tk = $request->tk;

        if ($request->sd != NULL)
            $user->sd = $request->sd;

        if ($request->smp != NULL)
            $user->smp = $request->smp;

        if ($request->sma != NULL)
            $user->sma = $request->sma;

        if ($request->development != NULL)
            $user->development = $request->development;

        if ($request->achievement != NULL)
            $user->achievement = $request->achievement;

        if ($request->organization != NULL)
            $user->organization = $request->organization;

        if ($request->committee != NULL)
            $user->committee = $request->committee;

        $user->save();

        return back()->withStatus(__('Profile successfully updated.'));
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        // $this->validate($request, [
        //     'old_password' => 'required',
        //     'password' => 'required|confirmed',
        // ]);

        $hashedPassword = auth()->user()->password;
        if (Hash::check($request->old_password, $hashedPassword)) {
            $user = User::find(auth()->id());
            $user->password = Hash::make($request->password);
            $user->save();
            return back()->withPasswordStatus(__('Password successfully updated.'));
        } else {
            return back()->withErrors(['old_password' => 'Current Password is Invalid']);
        }
    }

    public function hashpasswordallusers()
    {
        set_time_limit(0);
        // $count = User::count();
        // $skip = 818;
        // $limit = $count - $skip; // the limit
        // $users = User::skip($skip)->take($limit)->get();
        // // dd($users[0]);

        $users = User::all();
        foreach ($users as $s) {
            $s->update(['password' => Hash::make($s->password)]);
        }

        // $s = User::find(411);
        // $s->update(['password' => Hash::make($s->password)]);
        // dd($s);


        // return view('home');
    }
}
