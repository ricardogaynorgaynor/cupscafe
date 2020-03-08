<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('sign-up-login');
    }

    public function userPostRegistration(Request $request) {

        // validate form fields
        $request->validate([
                'first_name'        =>      'required',
                'last_name'         =>      'required',
                'password'          =>      'required|min:6',
                'confirm_password'  =>      'required|same:password'
            ]);
        $input          =           $request->all();

        //if validation success then create an input array
        $inputArray      =           array(
            'First_name'        =>      $request->first_name,
            'Last_name'         =>      $request->last_name,
            //'full_name'         =>      $request->first_name . " ". $request->last_name,
            'password'          =>      Hash::make($request->password)
        );

        // register user
        $user           =           User::create($inputArray);

// if registration success then return with success message
if(!is_null($user)) {
    return back()->with('success', 'You have registered successfully.');
}

// else return with error message
else {
    return back()->with('error', 'Whoops! some error encountered. Please try again.');
}
}

// -------------------- [ User login view ] -----------------------
public function userLoginIndex() {
    return view('sign-up-login');
}

// --------------------- [ User login ] ---------------------
public function userPostLogin(Request $request) {

    $request->validate([
        "password"        =>    "required|min:6"
    ]);

    $userCredentials = $request->only('password');

    // check user using auth function
    if (Auth::attempt($userCredentials)) {
        return redirect()->intended('sign-up-login');
    }

    else {
        return back()->with('error', 'Whoops! invalid username or password.');
    }
}

// ------------------ [ User Dashboard Section ] ---------------------
public function cart() {

    // check if user logged in
    if(Auth::check()) {
        return view('cart');
    }

    return redirect::to("sign-up-login")->withSuccess('Oopps! You do not have access');
}

// ------------------- [ User logout function ] ----------------------
public function logout(Request $request ) {
    $request->session()->flush();
    Auth::logout();
    return Redirect('sign-up-login');
    }


}

