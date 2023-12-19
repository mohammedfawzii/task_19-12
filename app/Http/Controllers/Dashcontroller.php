<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashcontroller extends Controller
{
    public function dash(){
        return view('layouts.dash');
    }
}
