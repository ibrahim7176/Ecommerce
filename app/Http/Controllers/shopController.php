<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class shopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Auth::user()->admin;
        if ($admin == 1) {
            return view('admin.dashboard');
        } else {

            return view('home.index');
        }
    }
    public function aboute()
    {
        return view('home.aboute');
    }
    public function products()
    {
        return view('home.products');
    }

    // public function admin()
    // {
    //     return view('admin.dashboard');
    // }
}
