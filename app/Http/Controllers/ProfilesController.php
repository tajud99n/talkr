<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.profile')->with('user', Auth::user());
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        if ($request->email == $user->email)
        {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'facebook' => 'required|url',
                'youtube' => 'required|url'
            ]);
        } else {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'facebook' => 'required|url',
                'youtube' => 'required|url'
            ]);
        }

        if ($request->hasFile('avatar'))
        {
            $avatar = $request->avatar;

            $avatar_new_name = time() . $avatar->getClientOriginalName();

            $avatar->move('uploads/avatars', $avatar_new_name);

            $user->profile->avatar = '/uploads/avatars/' . $avatar_new_name;

        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->profile->about = $request->about;
        $user->profile->facebook = $request->facebook;
        $user->profile->youtube = $request->youtube;

        if ($request->has('password') == null)
        {
            dd($request->all());
            $user->password = bcrypt($request->password);
        }
dd('cool');
        $user->save();
        $user->profile->save();

        Session::flash('success', 'Profile successfully updateed.');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
