<?php

namespace App\Http\Controllers;

use App\Models\Password_reset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasswordResetController extends Controller
{
    public function forgotpassword()
    {
        return view('forgotpassword');
    }

    public function storeforget(Request $request)
    {
        // dd($request);
        $password = DB::table('password_reset')->insert([
            'email'=>$request->email,
            'token'=>$request->_token,
        ]);

        // \Mail::to($request->email)->send(new \App\Mail\ForgetPassword($request));
        return redirect('/login');

        // return view('Backend.forget');
    }

    // public function resetpass()
    public function resetpass($token)
    {
        return view('resetpass',compact('token'));
        // return view('resetpass');
        // dd($token,"from controller");
    }

    public function resetpass_store($token,Request $request)
    {

        $reset_password = DB::table('password_reset')->select('email','token')
        ->where('token','=',$token)->get();
        // dd($reset_password[0]->email);
        // dd($reset_password->email);


        $reset_user = User::where('email',$reset_password[0]->email)->get();

        $reset_user[0]->password = $request->password;
        $reset_user[0]->save();

        $reset_password = DB::table('password_reset')->select('email','token')
        ->where('token','=',$token)->delete();

        return redirect('/login');
        // $reset_password[0]->destroy();
        // dd($reset_user[0]->password);
        // dd("Save password",$token);
        // return view('Backend.reset',compact('token'));
        // dd($token,"from controller");
    }
}
