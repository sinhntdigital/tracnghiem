<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( Auth::check())
        {
            $level=\App\User::join('role_user','users.id','=','role_user.user_id')->join('roles','roles.id','=','role_user.role_id')->where('role_user.user_id',Auth::user()->id)->select('roles.name')->get();
            if($level[0]['name']=="admin")
                return $next($request);
        }

        return redirect('login');

    }
}
