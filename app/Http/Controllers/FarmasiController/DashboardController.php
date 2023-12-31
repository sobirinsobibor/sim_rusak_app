<?php

namespace App\Http\Controllers\FarmasiController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('farmasi_views.index');
    }

}
