<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use Illuminate\Auth\Guard;
use DB;
use App\profile;
use Image;
use Response;
use App\User;

class AdminFrontController extends Controller
{
	/*
		The index Function only returns the Dashboard of the Admin panel
		to the user. 

		updated: June 9, 2019 2:31 Am.
	*/
    public function index(){
    	$avatar = Auth::Guard('admin')->user();
    	return view('admin.index',compact('avatar'));
    }

    /*
		The Profile Function returns the profile page to the user.
		The Auth::Guard('admin') verifies if the logged in user is
		Admin or not. If the user is not admin then it's kicked back
		to the home screen.
    */
    public function profile(){
    	$admin = Auth::Guard('admin')->user();
    	return view('admin.profile',compact('admin'));

    }
    /*
		The Update Avatar Function saves the uploaded file inside
		public/images/uploads/avatars folder. The files are named
		according to the time frame with their orignal extension.
		The user can save the filename inside the avatar column of
		Administrator database (admin database). You can change it
		according to your requirements.
    */
    public function update_avatar(Request $request){
    	//Handle the user upload of avatar   		

        dd($request);
        
   		if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');    		
    		$filename = time().'.'.$avatar->getClientOriginalExtension();
            
			//$filename = $avatar->getClientOriginalName().'.'.$avatar->getClientOriginalExtension();    		
    		Image::make($avatar)->resize(300,300)->save(public_path('/images/uploads/avatars/'.$filename));

    		$admin = Auth::Guard('admin')->user();
    		$admin->avatar = $filename;
    		$admin->save();
    	}


    	$admin = Auth::Guard('admin')->user();
    	return view('admin.profile',compact('admin')); 
    }

    public function all_admins(){
        $admins = DB::table('admins')->get();


       //$admins = DB::table('admins')->join('profiles','profiles.admin_id','admins.id')->get();
        return view('admin.administrators',compact('admins'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $admin = Admin::FindorFail($id);
        $admin->delete();
        return back()->with('delete','User Deleted Successfully');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {       


        $admin = Admin::FindOrFail($id)->update($request->all());

        return redirect()->back()->with('success','Updated!');
    }

    public function store(Request $request,Admin $admin){
        
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        Admin::create(request(['name','email','password']));
        // $admin->name = $request->input('name');
        // $admin->email = $request->input('email');
        // $admin->password = $request->input('password');

        // $admin->save();
        return redirect()->back()->with('success','User Created Successfully.');

    }

    public function faculty(){
        $users = DB::table('users')->get();
        return view('admin.faculty',compact('users'));
    }

    public function faculty_store(Request $request, User $user){
        //dd($request);
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        User::create(request(['name','email','password']));
        return redirect()->back()->with('success','Faculty Member added.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function faculty_destroy($id)
    {
        $admin = User::FindorFail($id);
        $admin->delete();
        return back()->with('delete','User Deleted Successfully');
    }

    
}
