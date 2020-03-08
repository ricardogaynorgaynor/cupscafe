<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminLoginController extends Controller
{
   
     public function __construct()
    {
        $this->middleware('guest:admin');
    }
    
    public function adminLoginForm()
    {
        return view('auth.adminLogin');
    }
    public function adminLogin(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect()->intended(route('admin.index'));
        }
            return redirect('admin/login');
        
    }
}