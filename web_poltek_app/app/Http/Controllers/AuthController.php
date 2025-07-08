<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;

class AuthController extends Controller
{
    public function regrister() 
    {
        return view('LoginPage/signup');       
    }

    public function login() 
    {
        return view('LoginPage/login');       
    }

    public function PostRegrister(Request $request) 
    {
        //dd($request->captcha);
        $request->validate([
            'captcha' => 'required|captcha',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'admin_role' => 'required',
        ]);
        $email = $request->email;
        $dbemail = DB::table('users')->where('email', $email)->first();
        if ($dbemail) {
            return back()->with('error_email', "Your Email have been regristered");            
        }
        $pass = Hash::make($request->password);
        $data = array("name"=>$request->name,"email"=>$email,"password"=>$pass,"admin_role"=>$request->admin_role,"status"=>0);
        DB::table('users')->insert($data);
        return back()->with('success', "Regrister successfully");       
    }

    public function ReloadCaptcha()
    {
       return response()->json(['captcha'=>captcha_img('math')]); 
    }

    public function PostLogin(Request $request)
    {
        $request->validate([
            'captcha' => 'required|captcha',
            'email' => 'required',
            'password' => 'required',
        ]);
        $email = $request->email;
        $dbemail = DB::table('users')->where('email', $email)->first();
        if ($dbemail) {
            if (Hash::check($request->password, $dbemail->password)){
                return redirect("/");
            }
            return back()->with('error', "Please Check your Password");            
        }
        return back()->with("error", "Email or Password wrong");

    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regerateToken();
        return redirect("/");
    }
    //
}
