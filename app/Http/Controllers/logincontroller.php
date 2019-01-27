<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function index()
    {
    	return view ('login.index');
    }
    public function dashboard()
    {
    	return view ('dashboard.index');
    }
}
