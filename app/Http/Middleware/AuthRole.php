<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-09-26T14:11:41+01:00
# @Filename: AuthRole.php
# @Last modified by:   mo
# @Last modified time: 2019-09-26T14:20:47+01:00




namespace App\Http\Middleware;

use Closure;

class AuthRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, String $role)
    {
        if (!$request->user() || !$request->user()->hasRole($role)) {
          return redirect()->route('home');
        }
        return $next($request);
    }
}
