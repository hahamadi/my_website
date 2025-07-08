<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use DB;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $u_id = explode(" ",$request->name);
        $tb_userList = User::get();
        $tb_userLength = $tb_userList->count();
        $user_id = "";
        for ($i = 0; $i < $tb_userLength; $i++) {
            $x = $u_id[$i][0];
            $user_id = $user_id.$x;
        }
        $tb_userLength = $tb_userLength+1;
        $user_id = $user_id.$tb_userLength;

        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));
        $d_user_id = array('user_id' => $user_id);
        DB::table('users')->where('email',$request->email)->update($d_user_id);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
