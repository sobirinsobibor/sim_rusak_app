<?php

namespace App\Http\Controllers\KeuanganController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('keuangan_views.index');
    }
}
