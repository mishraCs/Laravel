<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{

    public function index()
    {
         return view('home.user');
    }
    //
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        // dd($usertype);
        if($usertype == '1')
        {
            return view("admin.home");
        }
        else{
            // return view(('dashboard'));
            return view(('home.user'));

        }
    }

}