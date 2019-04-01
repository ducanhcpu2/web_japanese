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
//    protected $user;
//
//    public function __construct()
//    {
//        $this->user = User::find(Auth::user()->user_id);
//    }

    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if ($user && $user->role == 'staff') // if your role is coming from relation then try `$user->role->name == 'staff'`
        {
            return $next($request);
        }
//        dd($this->user->email);

        return redirect('index')->with('error', 'You have not admin access');
    }
}
