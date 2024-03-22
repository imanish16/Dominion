<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;


class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check()){
            $user_role = auth()->user()->role;
            if($user_role == 0){
                return redirect()->route('home');
            }
        }else{
            $email = $request->email;
            $user_role = User::select('role')->where("email", $email)->first();
            if($user_role->role == 0){
                return redirect()->route('home');
            }
        }
        return $next($request);
    }
}