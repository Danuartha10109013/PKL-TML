<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('content.dashboard.index');
        // return view('layouts.index');
        // return 'ini dashboard';
    }
}
