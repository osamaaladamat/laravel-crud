<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Rules\fullNameRule;
use Illuminate\Support\Facades\Route;

class DashboardController extends Controller
{

    private $password;
    private $image;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('dashboard.index', compact('users'));
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
        $user = User::find($id);
        return view('dashboard.edit_user', compact('user'));
    }
    public function validation($request, $id)
    {
        //Geting old data
        $olduser = User::find($id);
        //Checking if user set new password else keep old password
        if ($request->input('password')) {
            $this->password = $request->input('password');
            $pass_validation = "required|confirmed|min:6";
            //changing the password validation if the user used a password
        } else {
            $this->password = $olduser->password;
            $pass_validation = "";
            //changing the password validation if the user didnt use a password
        }
        if ($request->file('image')) {
            $file = $request->file('image');
            //$name =  rand() . $file->getClientOriginalName();
            $name =  'r89pyrkwj3q0.jpg';
            //$file->move('images', $name);
            $this->image = $name;
            $img_validation = "required|mimes:jpeg,jpg,png|max:1000|dimensions:min_width=200,min_height=200,max_width=1000,max_height=1000";
            //changing the password validation if the user used a password
        } else {
            $this->image = $olduser->image;
            $img_validation = "";
            //changing the password validation if the user didnt use a password
        }
        $request->validate([
            'full_name' => ['required', 'max:50', new fullNameRule()],
            'email'     => 'required|email',
            'password'  => $pass_validation,
            'NID'       => 'required|digits:10',
            'mobile'    => 'required|regex:/(077)[0-9]{7}/|digits:10',
            'address'   => 'required|max:50',
            'image'     => $img_validation
        ]);
    }
    // public function validation($request, $id)
    // {
    //     //Geting old data
    //     $olduser = User::find($id);
    //     //Checking if user set new password else keep old password
    //     if ($request->input('password')) {
    //         $this->password = $request->input('password');
    //         //changing the password validation if the user used a password
    //         $request->validate([
    //             'full_name' => ['required', 'max:50', new fullNameRule()],
    //             'email'     => 'required|email',
    //             'password'  => 'required|confirmed|min:6',
    //             'NID'       => 'required|digits:10',
    //             'mobile'    => 'required|regex:/(077)[0-9]{7}/|digits:10',
    //             'address'   => 'required|max:50',
    //             'image'     => 'required|mimes:jpeg,jpg,png|max:1000|dimensions:min_width=200,min_height=200,max_width=1000,max_height=1000'
    //         ]);
    //     } else {
    //         $this->password = $olduser->password;
    //         //changing the password validation if the user didnt use a password
    //         $request->validate([
    //             'full_name' => ['required', 'max:50', new fullNameRule()],
    //             'email'     => 'required|email',
    //             'password'  => '',
    //             'NID'       => 'required|digits:10',
    //             'mobile'    => 'required|regex:/(077)[0-9]{7}/|digits:10',
    //             'address'   => 'required|max:50',
    //             'image'     => 'required|mimes:jpeg,jpg,png|max:1000|dimensions:min_width=200,min_height=200,max_width=1000,max_height=1000'
    //         ]);
    //     }
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validation($request, $id);

        $users = User::find($id);
        //On left field name in DB and on right field name in Form/view
        $users->update([
            $users->full_name   = $request->input('full_name'),
            $users->email       = $request->input('email'),
            $users->password    = $this->password,
            $users->NID         = $request->input('NID'),
            $users->address     = $request->input('address'),
            $users->mobile      = $request->input('mobile'),
            $users->image       = $this->image
        ]);
        //$users->save();
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect("/admin");
    }
}
