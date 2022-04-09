<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function show_login(){
        return view('user.login');
    }

    public function create_account(){
        return view('user.signUp');
    }

    public function login(Request $request){
      Validator::validate($request->all(),[
        'user_email'=>['email','required','min:3','unique:users, email'],
        'user_pass'=>['required','min:5']
       ],[
           'user_email.required' => 'Error! Can not be null' ,
       ] );
       /*
       $u = new User();
       $u->name = $request->input('user_email');
       $u->save();*/

       if(Auth::attempt(['email'=>$request->email_username,'password'=>$request->user_pass])){

            
        if(Auth::user()->hasRole('admin'))
        return redirect()->route('dashboard');
        else 
        return redirect()->route('home');

    
    }
    }

    public function signUp(Request $request){
        Validator::validate($request->all(),[
            'full_name'=>['required','min:5'],
            'user_email'=>['required','email','unique:users,email'],
            'user_pass'=>['required','min:5'],
            'confirm_pass'=>['same:user_pass']


        ],[
            'full_name.required'=>'password is required',
            'full_name.min'=>'password should not be more than 5',
            'user_email.unique'=>'there is an email in the table',
            'user_email.required'=>'this field is required',
            'user_email.email'=>'incorrect email format',
            'user_pass.required'=>'password is required',
            'user_pass.min'=>'password should not be more than 5',
            'confirm_pass.same'=>'password dont match',
        ]);

        $u=new User();
        $u->name=$request->full_name;
        $u->password=Hash::make($request->user_pass);
        $u->email=$request->user_email;
        if($u->save())
        return redirect()->route('home')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);
    }
}
