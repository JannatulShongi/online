<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function form(){
        return view('frontend.user.registration');
    }
    public function store(Request $request){
       $user = new User();
       $user->name=$request->name;
       $user->contact=$request->contact;
       $user->email=$request->email;
       $user->password=bcrypt($request->password);
       $user->address=$request->address;
       $user->save();
       return redirect()->back()->with('message','registration done successfully');


    }
    public function login(){
        return view('frontend.user.login');
    }

    public function loginput(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'email' =>  'required',
            'password' =>  'required',
        ]);

        $credentials =  $request->except('_token');



        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->to('/');
        } else {
            return redirect()->back()->withErrors('Invalid Credentials');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
