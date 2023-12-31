<?php

namespace App\Http\Controllers\PoliklinikController;

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
        - admin semua poliklinik    
        - admin salah satu poliklinik
        - dokter salah satu poliklinik 
        - perawat salah satu poliklinik
        */
        $poliklinik_department_id = '002';
        $user = Auth::user();
        $sub_dept = UserSubDept::select('sub_departments.sub_department_name')
        ->join('sub_departments', 'sub_departments.sub_department_id', '=', 'user_sub_depts.sub_department_id' )
        ->where('nip', $user->nip)
        ->first();


        // admin semua poliklinik
        if ($user->role_id == 1 
            && $user->department_id == $poliklinik_department_id 
            && !in_array($user->nip, $this->getSubDepartments())) 
        {
            return view('poliklinik_views.index');
        }
        //admin salah satu poliklinik
        else if ($user->role_id == 1
            && $user->department_id == $poliklinik_department_id 
            && in_array($user->nip, $this->getSubDepartments())) 
        {
            // Admin salah satu poliklinik
            return redirect('/poliklinik'. '/' .  $this->convertToSlug($sub_dept['sub_department_name']));
        }
        // dokter or perawat poliklinik
        else if ($user->role_id == 2 || $user->role_id == 3
            && $user->department_id == $poliklinik_department_id 
            && in_array($user->nip, $this->getSubDepartments())) 
        {
            $redirectPath = '/poliklinik'. '/' .$this->convertToSlug($sub_dept['sub_department_name']) . '/' . ($user->role_id == 2 ? 'dokter' : 'perawat');
            return redirect($redirectPath);
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
