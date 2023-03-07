<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard');
    }
}
