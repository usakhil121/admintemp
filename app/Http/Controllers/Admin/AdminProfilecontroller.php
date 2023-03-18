<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use Auth;

class AdminProfilecontroller extends Controller
{
    public function index(){
        return view('admin.profile');
    }
    public function profile_submit(Request $request){
        $admin_data = Admin::where('email',Auth::guard('admin')->user()->email)->first();
        $request->validate([
            'name' =>  'required',
            'email' =>  'required|email'
           
         ]);
         if($request->password!=''){
            $request->validate([
            'password' =>  'required',
            'retypepassword' =>  'required|same:password'
           
         ]);
         $admin_data->password = Hash::make($request->password);
         }
          if($request->hasFile('photo')){
            $request->validate([
            'photo' =>  'image|mimes:jpg,jpeg,png,gif',
            ]);
         unlink(public_path('dist/uploads/'.$admin_data->photo));
         $ext=$request->file('photo')->extension();
         $final_name='admin'.'.'.$ext;
           $request->file('photo')->move(public_path('dist/uploads/'),$final_name);
           $admin_data->name = $final_name;
          }
        // dd($admin_data);
        $admin_data->name = $request->name;
        $admin_data->email =$request->email;
        $admin_data->update();

        return redirect()->back()->with('success','Profile information is saved Successfully!!!');
        

    }
}