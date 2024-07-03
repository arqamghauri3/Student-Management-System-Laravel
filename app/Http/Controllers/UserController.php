<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function loginValidate(Request $request){
        $user = User::where('username', $request->username)->where('password', $request->password)->first();
    
        if($user){
            session(['user_role' => $user->role]);
            session(['user_id' => $user->userID]);
            session(['user_username' => $user->username]);
            
                return redirect(route('viewDashboard'));
 
        } else {
            return redirect('/')->with('error', 'Invalid credentials');
        }
    }

    public function signout(){
        Session::flush();
        return redirect('/');
    }

    public function viewDashboard(){
        return view('dashboard');
    }
}
