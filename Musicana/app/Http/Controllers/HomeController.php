<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(Music $music, User $user)
    {
        $music = Music::All();
        $user = User::all();    

        // dd($music);
        return view('home', compact('music','user'));
    }
    public function registerpage()
    {
        return view('register');
    }
    public function registerdata(request $request)
    {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();
        }

    public function loginpage()
    {
        return view('login');
    }
    public function loginvalidate(request $request)
    {
        $request->validate(['email'=>'required','password'=>'required']);

        $credential = $request->only('email','password');
        if(Auth::attempt($credential))
        {
            if(Auth::user()->role_as == 1)
            {
                return redirect('/adminhome');
            }
            else if(Auth::user()->role_as == 0)
            {
                return redirect('/home');

            }
            else
            {

                return redirect('/home');
            }
        }
        else
        {
            return redirect('/login');
        }
    }


    public function adminhome()
    {
        return view('admin.adminhome');
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/home');
    }

    public function userlist_id($id,User $user)
    {
        $user = User::findOrFail($id);
        $user->get();
        return view('user_profile', compact('user'));
    }



}
