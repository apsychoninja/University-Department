<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class FrontController extends Controller
{
    public function index(){
    	return view('front.index');
    }

    /*about us page*/
    public function about(){
    	return view('front.about');
    }

    /*recent Events*/
    public function events(){
    	return view('front.event');
    }

    /*upcoming events*/
    public function upcomingevents(){
    	return view('front.upcomingevents');
    }

    /*courses offered in department*/
    public function coursesoffered(){
    	return view('front.coursesoffered');
    }

    /*Faculty members*/
    public function facultymembers(){
    	return view('front.facultymembers');
    }

    public function blog(){
        return view('front.blog');
    }

    public function contact(){
        return view('front.contact');
    }


    public function locale($locale){
        Session::put('locale',$locale);
        return redirect()->back();
    }
}
