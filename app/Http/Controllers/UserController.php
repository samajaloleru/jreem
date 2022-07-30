<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
Session_start();

class UserController extends Controller
{
    public function index() {
        // $this->UserAuthCheck();
        $data = ['LoggedUserInfo' =>User::where('id', session('LoggedUser'))->first()];
        // dd($data);
        return view('dashboard.index', $data);
    }
    
    

}
