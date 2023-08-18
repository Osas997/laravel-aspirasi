<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Mahasiswa
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (auth("mahasiswa")->check()) {
            return $next($request);
        }

        if (auth("petugas")->check()) {
            return abort(403, "Ada Yang Salah");
        }

        return redirect("/login");
    }
}
