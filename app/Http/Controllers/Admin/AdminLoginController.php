<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use Auth;
use App\Mail\Websitemail;

class AdminLoginController extends Controller
{
    public function index(){
       /* $pass= Hash::make('12345');
        dd($pass); */
        return view('admin.login');
    }
     public function forgetpw(){
        return view('admin.forgetpw');
    }
    public function forget_password_submit(Request $request){
          $request->validate([
            'email' =>  'required|email',
            
         ]);

         $admin_data = Admin::where('email',$request->email)->first();
         if(!$admin_data){
            return redirect()->back()->with('error','email not found');

         }
         $token =hash('sha256',time());

         $admin_data->token= $token;
         $admin_data->update();


         $reset_link = url('admin/reset-password/'.$token.'/'.$request->email);
         $subject = 'Reset Password';
         $message = 'Please click on the following link: <br>';
         $message .= '<a href="'.$reset_link.'">Click here</a>';

         \Mail::to($request->email)->send(new Websitemail($subject,$message));
          return redirect()->route('admin_login')->with('success','Please check your email and Follow the steps there');
    }
    public function login_submit(Request $request){
         $request->validate([
            'email' =>  'required|email',
            'password' =>'required'
         ]);


         $credential = [
            'email' =>$request->email,
            'password' =>$request->password
         ];
         if(Auth::guard('admin')->attempt($credential)){
            return redirect()->route('admin_home');
         }
            else
            {
                return redirect()->route('admin_login')->with('error','information not correct');
            }
         
        
    }
    public function logout(){
      Auth::guard('admin')->logout();
      return redirect()->route('admin_login');
    }

    public function reset_password($token,$email){

         $admin_data = Admin::where('token',$token)->where('email',$email)->first();
         if(!$admin_data){
            return redirect()->route('admin_login');
         }
         return view('admin.reset_password', compact('token','email'));
    }

    public function reset_password_submit(Request $request){
      $request->validate([
            'password' =>  'required',
            'retypepassword' =>'required|same:password'
         ]);
        $admin_data = Admin::where('token',$request->token)->where('email',$request->email)->first();

         $admin_data->password = Hash::make($request->password);
         $admin_data->token= '';
         $admin_data->update();
          return redirect()->route('admin_login')->with('success','Password Reset Successfully!!!!');

    }
}
