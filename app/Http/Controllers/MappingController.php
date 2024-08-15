<?php

namespace App\Http\Controllers;

use App\Models\Coil;
use App\Models\Shipment;
use Illuminate\Http\Request;

class MappingController extends Controller
{
    public function index($id)
    {
        // Mengambil data Shipment berdasarkan id
        $data = Shipment::where('id',$id)->get();
        $same = Shipment::where('id',$id)->value('no_gs');
        $coil = Coil::where('no_gs', $same)->get();
        $tonase = Coil::where('no_gs', $same)->sum('berat_produk');
    
        // Mengembalikan view dengan data Shipment yang diambil
        return view('content.pengecekan.index', compact('data','coil', 'tonase'));
    }
}
