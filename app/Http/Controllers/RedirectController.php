<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RedirectController extends Controller
{

   public function CheckUser(){
    if(Auth::check()){
        $UserType = Auth::user()->type;
        if($UserType == 'SuperUser'){
            return view('dashboard');
        }else{
            return view('welcome');
        }
    }else{
        return view('welcome');
    }
   }   

   public function LogoutUser(){
    Auth::logout();
    return redirect('/login');
   }

}
