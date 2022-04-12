<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function showJobs(){
       // if(Auth:)
        //return redirect()->route($this->checkRole());
        //else 
        return view('front.jobs');
    }

    public function showServices(){
        // if(Auth:)
         //return redirect()->route($this->checkRole());
         //else 
         return view('front.services');
     }
}
