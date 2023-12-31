<?php

namespace App\Http\Controllers\PoliklinikController\ObgynController;

use App\Models\User;
use App\Models\UserSubDept;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){

        /*
        kita cek dulu yang login di polikinik apakah dia :
        - admin salah satu poliklinik
        - dokter salah satu poliklinik 
        - perawat salah satu poliklinik
        */
        $poliklinik_department_id = '002';
        $user = Auth::user();

        //admin salah satu poliklinik
        if ($user->role_id == 1
            && $user->department_id == $poliklinik_department_id 
            && in_array($user->nip, $this->getSubDepartments())) 
        {
            // Admin salah satu poliklinik
            return view('poliklinik_views.obgyn.admin.index');
        }
        // dokter or perawat poliklinik
        else if ($user->role_id == 2 || $user->role_id == 3
            && $user->department_id == $poliklinik_department_id 
            && in_array($user->nip, $this->getSubDepartments())) 
        {
            $redirectPath = 'poliklinik_views.obgyn.' . ($user->role_id == 2 ? 'dokter' : 'perawat'). '.index';
            return view($redirectPath);
        }

    }

    // Helper function to get all sub_departments
    private function getSubDepartments()
    {
        // Menggunakan Eloquent untuk mendapatkan semua sub_departments
        return UserSubDept::pluck('nip')->toArray();
    }

    private function convertToSlug($string)
    {
        $slug = strtolower($string);
        $slug = str_replace(' ', '-', $slug);
        $slug = preg_replace('/[^a-z0-9\-]/', '', $slug); // Hapus karakter non-alphanumeric dan non-dash
        return $slug;
    }

}
