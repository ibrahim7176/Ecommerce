<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\models\User;

class logoutController extends Controller
{
    public function adminview()
    {

        return view('dashboard');
    }
    public function getout()
    {


        Auth::logout();

        return view('dashboard');
    }
}
