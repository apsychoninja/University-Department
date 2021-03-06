<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{

	public function __construct(){
		$this->middleware('guest:admin');
	}

    public function showLoginForm(){
    	return view('auth.admin-login');
    }

    public function login(Request $request){
    	//validate the form data
        
//        dd($request);
        $this->validate($request,[
    		'email' => 'required|email',
    		'password' => 'required|min:6'
        ]);
    
    	// Attempt to log the admin in
        // if successful, then redirect to their intended locaiton.
    	if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password' => $request->password], $request->remember)){
    		return redirect()->intended(route('admin.dashboard'));
    	}

    	// if unsuccessful, then redirect back to the login with the form data.
    	return redirect()->back()->withInput($request->only('email','remember'))->with('error','Email or Password is incorrect');
    }


    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
    }*/
}
