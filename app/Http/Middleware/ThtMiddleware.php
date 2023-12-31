<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\UserSubDept;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ThtMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $tht_sub_department_id = "005002";
        $user_sub_dept = UserSubDept::select('user_sub_depts.sub_department_id as user_sub_dept_id')
        ->where('nip', auth()->user()->nip)
        ->first();

        //  Check if the user is authenticated and has main-admin privileges
        if (auth()->check() && $user_sub_dept['user_sub_dept_id'] == $tht_sub_department_id) {
            // If the user is an main-admin, continue with the requestrtment_id) {
            return $next($request);
        }
        
        // If the user is not an main-admin, redirect to a 403 page (Forbidden).
        return response()->view('starter.403', [], 403);
    }
}
