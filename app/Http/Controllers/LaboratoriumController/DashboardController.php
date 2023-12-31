<?php

namespace App\Http\Controllers\LaboratoriumController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('laboratorium_views.index');
    }
}
