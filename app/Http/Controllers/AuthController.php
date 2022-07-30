<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function logout()
    {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/login');
        }
    }
    
    public function form_register(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:12',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:5',
        ]);
        $newpassword = Str::lower($request->password);

        
        $user = new User;
        $user->firstname = Str::lower($request->firstname);
        $user->lastname = Str::lower($request->lastname);
        $user->mobile = $request->mobile;
        $user->email = Str::lower($request->email);
        $user->password = Hash::make($newpassword);
        $save = $user->save();

        if ($save) {
            return redirect('/login')->with('success','User Created Successfully');
        }else{
            return back()->with('error','Something went wrong, try again later');
        }
        
    }
   
    public function form_login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:5',
        ]);

        $userInfo = User::where('email', '=', $request->email)->first();
        
        // dd($userInfo)
        $newpassword = Str::lower($request->password);

        if (!$userInfo) {
            return back()->with('error','Invalid Email Address');
        }else{
            if(Hash::check($newpassword, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                if ($userInfo->is_admin == 1) {
                    return redirect('/dashboard')->with('success','Admin logged in Successfully');
                } else {
                    return redirect('/dashboard')->with('success','User logged in Successfully');
                }
                
            }else{
                return back()->with('error','Invalid Password');
            }
        }
        
    }
}
