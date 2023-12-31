<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate(Request $request){
        
        $credentials = $request->validate(
            [
                "nip" => 'required|numeric',
                "password" => 'required'
            ],       
        );


        if(Auth::attempt(['nip' => $credentials['nip'], 'password' => $credentials['password'], 'department_id' => 1])){
            $request->session()->regenerate();
            return redirect()->intended('/administrasi');
        }
        else if(Auth::attempt(['nip' => $credentials['nip'], 'password' => $credentials['password'], 'department_id' => 2])){
            $request->session()->regenerate();
            return redirect()->intended('/poliklinik');
        }
        else if(Auth::attempt(['nip' => $credentials['nip'], 'password' => $credentials['password'], 'department_id' => 3])){
            $request->session()->regenerate();
            return redirect()->intended('/farmasi');
        }
        else if(Auth::attempt(['nip' => $credentials['nip'], 'password' => $credentials['password'], 'department_id' => 4])){
            $request->session()->regenerate();
            return redirect()->intended('/laboratorium');
        }
        else if(Auth::attempt(['nip' => $credentials['nip'], 'password' => $credentials['password'], 'department_id' => 5])){
            $request->session()->regenerate();
            return redirect()->intended('/keuangan');
        }

        return back()->with('loginError', 'Login Failed');
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }

}

