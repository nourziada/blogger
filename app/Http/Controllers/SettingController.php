<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Session;

class SettingController extends Controller
{

    public function __construct()
    {
        $this->middleware('checkAdmin');
    }

    public function index(){
        $setting = Setting::first();

        return view('admin.setting.index', compact('setting'));
    }

    public function update(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'number' => 'required',
            'email' => 'required',
            'address' => 'required'
        ]);

        $setting = Setting::first();

        $setting->title = $request->title;
        $setting->number = $request->number;
        $setting->address = $request->address;
        $setting->email = $request->email;

        $setting->save();

        Session::flash('success' , 'Setting Updated Successfuly');
        return redirect()->back();

    }
}
