<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Rules\fullNameRule;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('public.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('public.register');
    }
    public function validation($request)
    {
        $request->validate([
            'full_name' => ['required', 'max:50', new fullNameRule()],
            'email'     => 'required|email',
            'password'  => 'required|confirmed|min:6',
            'NID'       => 'required|digits:10',
            'mobile'    => 'required|regex:/(077)[0-9]{7}/|digits:10',
            'address'   => 'required|max:50',
            'image'     => 'required|mimes:jpeg,jpg,png|max:1000'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);
        if ($file = $request->file('image')) {
            $name =  rand() . $file->getClientOriginalName();
            $file->move('images', $name);
            // return $name;

        }


        $users = new User();
        //On left field name in DB and on right field name in Form/view
        $users->full_name = $request->input('full_name');
        $users->email    = $request->input('email');
        $users->password = $request->input('password');
        $users->NID   = $request->input('NID');
        $users->address   = $request->input('address');
        $users->mobile   = $request->input('mobile');
        $users->image   = $name;
        $users->save();



        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // if ($id) {
        //     $users = User::all();
        // } else {
        //     $users = User::find($id);
        //     return view('index', compact('users'));
        // }

        $user = User::find($id);
        return view('public.student', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
