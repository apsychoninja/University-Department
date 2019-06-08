<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use Illuminate\Auth\Guard;

class AdminFrontController extends Controller
{
    public function index(){
    	$avatar = Auth::Guard('admin')->user();
    	return view('admin.index',compact('avatar'));
    }

    public function profile(){
    	$admin = Auth::Guard('admin')->user();

    	//dd($admin);
    	return view('admin.profile',compact('admin'));

    }
   
}
