<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class AdministratorOrNot
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     return $next($request);
    // }
    public function toAdministrator(User $user){
        if($user->roll==1){
            return redirect()->route('user.editAdmin');
        }
    }
    public function toPrivate(User $user){
        if($user->roll!==1){
            return redirect()->route('user.edit');
        }
    }
}
