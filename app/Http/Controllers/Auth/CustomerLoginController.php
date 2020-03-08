<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CustomerLoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:customer');
    }

    public function custLoginForm()
    {
        return view('auth.clientLogin');
    }
    public function custLogin(){
        $this->validate($request,[
            'fname' => 'required',
            'lname' => 'required',
            'digital_id' => 'required'
        ]);

        if(Auth::guard('admin')->attempt(['fname' => $request->fname, 'lname' => $request->lname, 'digital_id' => $request->digital_id]))
        {
            return redirect()->intended(route('admin.index'));
        }
            return redirect('cust/login');
    }
    
}







 