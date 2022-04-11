<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    function __construct()
    {
        
    }

    
    //

    public function dashboard(){
       
        //return view('admin.dashboard');

     //   $user=User::with(['profile','products'])->where('id',2)->get()->first();
     $user=User::where('id',2)->get()->first();
        //return $user->profile->facebook;
        //return response($user);

        return view('front.home');
    }

    public function adminDash(){
        return view('admin.dashboard');

    }


    /* User Processes*/
    public function userDash(){
        return view('front.userDash') ;
    }

    public function addSkills(){
        return view ('front.addSkills');
    }
}
