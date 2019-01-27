<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class membercontroller extends Controller
{
    public function member()
    {
    	return view ('member.index');
    }
    public function viewmember()
    {
    	return view ('member.member');
    }
}
