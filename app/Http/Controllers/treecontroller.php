<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class treecontroller extends Controller
{
    public function tree()
    {
    	return view('tree.tree');
    }
}
