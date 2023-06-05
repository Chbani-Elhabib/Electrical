<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $Person =   $request->session()->get('Person');
        if (isset($Person)) {
            if($Person['User_Group'] == 'Admin'){
                return $next($request);
            }
        }
        return redirect()->back();
    }
}
