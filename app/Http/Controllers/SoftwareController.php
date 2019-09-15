<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\software;
use Illuminate\Http\Request;
use Validator; 
use Intervention\Image\ImageManager;
use Image;
use Auth;

class SoftwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $software = Software::all();
        
        return view('admin.softwares',compact('software'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Software $software)
    {

        if(Input::hasFile('image')){
            $file = Input::file('image');
            $filename = $file->getClientOriginalName();
            //$file->move('uploads',$file->getClientOriginalName());
            $image = $file->move('images/uploads/softwares/',$filename);

            $software->image = $filename;
        }
        $software->title = $request->title;
        $software->description = $request->description;
        $software->download_link = $request->download_link;
        $software->save();
        return redirect()->back()->with('success','Software added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\software  $software
     * @return \Illuminate\Http\Response
     */
    public function show(software $software)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\software  $software
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, software $software)
    {
        $update = Software::FindOrFail($software->id)->update($request->all());
        return redirect()->back()->with('success','Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
        $admin = Software::FindorFail($id);
        $admin->delete();
        return back()->with('delete','Software Deleted Successfully');
    }


}
