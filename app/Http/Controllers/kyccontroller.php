<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kyccontroller extends Controller
{
    public function kyc()
    {
    	return view('kyc.kyc');
    }
}
