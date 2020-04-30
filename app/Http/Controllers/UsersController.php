<?php

namespace App\Http\Controllers;
use App\User;
use DB;
use App\Mail\TestMail;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function signUp(Request $request){
        $user = DB::table('users')->where('email', $request->email)->first();
        if($user)
        {
            echo 'email already used'; 
        }
        if($request->password == $request->password1){
        User::create($request->all());  
        return redirect('/')->with('massage','value added successfully');     
        }
        else
        {
            echo 'password does not match';
        }
    }
    
    public function login(Request $request){
        $checkUser = User::where(['email'=>$request->email,'password'=>$request->password])->get(); ;
        if(count($checkUser) > 0)
        {
            return redirect('users/loggedIn')->with('success','you are logged in');
        }
        else
        {
            return 'username of password is incorrect';
        }
    }
    
    public function forgotPassword(Request $request){
           
        $request->session()->put('email', $request->email); 
        $details = [
            'title' => '',
            'body'  => ''
        ];
        \Mail::to($request->email)->send(new TestMail($details));

        return redirect('users/OTPpage');
    }    
    
    public function checkOTP(Request $request){
        if(session()->get('OTP') == $request->otp){
            return redirect('users/newPassword');    
        }
        else
        {
            return 'incorrect OTP';
        }
        
        
        
        
    }    
    
    public function newPassword(Request $request){
        if($request->password == $request->password1)
        {
            $email = $request->session()->get('email');
            $user = User::where('email', '=', $email);
            $input = $request->all();
            $user->update(['password'=>$request->password]);
          return redirect('/');

        }
        else
        {
            return 'incorrect password plz try again';
        }
        
    }  
}
