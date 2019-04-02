<?php

namespace App\Http\Middleware;

use App\User;
use Illuminate\Support\Facades\Auth;
use Closure;

class exams
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {

        if (Auth::check()) // if your role is coming from relation then try `$user->role->name == 'staff'`
        {
            return $next($request);
        }

        return redirect('index')->with('error', 'You have not admin access');
    }
}
