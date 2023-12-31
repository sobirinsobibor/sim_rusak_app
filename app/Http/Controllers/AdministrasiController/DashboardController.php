<?php

namespace App\Http\Controllers\AdministrasiController;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $users = User::with('role', 'department')->get();
        return view('administrasi_views.index', [
            'users' => $users
        ]);
    }
}
