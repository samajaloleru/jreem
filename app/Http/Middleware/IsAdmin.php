<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $data = User::where('id', session('LoggedUser'))->first();
        if($data->is_admin == 1){
            return $next($request);
        }elseif($data->is_admin == 0){
            return back()->with('error',"You don't have admin access.");
        }
        // dd($data->name);
        
        return $next($request);
    }
}