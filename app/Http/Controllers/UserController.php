<?php

namespace App\Http\Controllers;

use Session;
use App\Profile;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('checkAdmin');
    }



    public function index()
    {
        $users = User::all();
        return view('admin.users.index' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'name' => 'required|max:255',
            'email' => 'required|email'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('password')
        ]);

        // Create A new Profile when Creating User
        $profile = Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads\avatars\original.png'
        ]);

        Session::flash('success', 'User Created Successfully');

        return redirect()->back();

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();

        Session::flash('success', 'User Deleted Successfuly');
        return redirect()->back();
    }

    public function makeadmin($id){
        $user = User::find($id);
        $user->admin = 1;
        $user->save();

        Session::flash('success', 'User Change to Admin Successfully');

        return redirect()->back();

        dd($id);
    }


    public function deleteadmin($id){
        $user = User::find($id);
        $user->admin = 0;
        $user->save();

        Session::flash('success', 'Admin change to Author Successfully');

        return redirect()->back();
    }
}
