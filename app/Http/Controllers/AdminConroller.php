<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminConroller extends Controller
{
    public function catagory()
    {
        return view('admin.catagory');
    }
}
