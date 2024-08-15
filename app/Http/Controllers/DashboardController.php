<?php

namespace App\Http\Controllers;

use App\Models\Coil;
use App\Models\Shipment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
// Controller method

$data = Shipment::where('id', 1)->get();
return view('content.dashboard.index', compact('data'));

        // return view('layouts.index');
        // return 'ini dashboard';
    }
    public function show($id)
    {
        // Mengambil data Shipment berdasarkan id
        $data = Shipment::where('id',$id)->get();
        $same = Shipment::where('id',$id)->value('no_gs');
        $coil = Coil::where('no_gs', $same)->get();
    
        // Mengembalikan view dengan data Shipment yang diambil
        return view('content.dashboard.index', compact('data','coil'));
    }
    
}
