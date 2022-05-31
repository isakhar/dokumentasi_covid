<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Crypt;
use DB;
use Auth;

class LoginCustomController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('auth.login');
    }

    public function proses_login(Request $request){
        
        $request->validate([
            'deleted' => 'exists',
            'username' => 'required',
            'password' => 'required'
        ]);

        $request->merge(['deleted'=>'1']);

        $credentials = $request->only('username', 'password', 'deleted');//email
        //array('username'=>$request->username,'password'=>$request->password,'deleted'=>'1');
        if (Auth::attempt($credentials)) {
            // return redirect('dashboard');
            return redirect('history');
        }else{
        	session()->flash('message', 'Login gagal, silakan coba lagi dengan username dan password yang benar');//email
            return redirect()->back();
        }
        // return Redirect::to("login")->with('error', '*username atau Password anda salah');

    }

    public function logout()
    {

        Auth::logout();

        return redirect()->route('login');
    }

}
