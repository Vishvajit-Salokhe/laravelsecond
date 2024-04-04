<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthController extends Controller
{
    public function login()
    {
        return view('common_pages.login');
    }


    public function postlogin(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $validated = auth()->attempt([
            'email' => $request->username,
            'password' => $request->password,
        ]);
        if ($validated) {
            return redirect('dashboard');
        } else {
            return redirect('/');
        }
    }

    public function Dashboard()
    {
        $user = Auth::user();
        if ($user->role == 'admin') {
            $number = User::where('role', 'user')->count();
            $present = User::where('status','present')->where('role', 'user')->count();
            return view('admin.admindashboard', compact(['number','present']));
        } else {
            $data=User::find($user->id);
           
            $data->status='present';
            $data->save();


            return view('employee.employeeDashboard');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

}
