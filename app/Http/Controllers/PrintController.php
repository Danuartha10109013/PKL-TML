<?php

namespace App\Http\Controllers;

use App\Models\Coil;
use App\Models\MapCoil;
use App\Models\Pengecekan;
use App\Models\Shipment;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function print($id){
        $data=Pengecekan::where('no_gs',$id)->get();
        $coil=MapCoil::where('no_gs', $id)->get();
        $img = Coil::where('no_gs',$id)->pluck('keterangan');
        // foreach($coil as $co){
        //     $ia1= $co->a1;
        //     $ia2= $co->a2;
        //     $ia3= $co->a3;
        //     $ia4= $co->a4;
        //     $ia5= $co->a5;
        //     $ib1= $co->b1;
        //     $ib2= $co->b2;
        //     $ib3= $co->b3;
        //     $ib4= $co->b4;
        //     $ib5= $co->b5;
        //     $ic1= $co->c1;
        //     $ic2= $co->c2;
        //     $ic3= $co->c3;
        //     $ic4= $co->c4;
        //     $ic5= $co->c5;
        // }
        // $imga1= Coil::where('kode_produk',$ia1)->value('keterangan');
        // $imga2= Coil::where('kode_produk',$ia2)->value('keterangan');
        // $imga3= Coil::where('kode_produk',$ia3)->value('keterangan');
        // $imga4= Coil::where('kode_produk',$ia4)->value('keterangan');
        // $imga5= Coil::where('kode_produk',$ia5)->value('keterangan');

        // $imgb1= Coil::where('kode_produk',$ib1)->value('keterangan');
        // $imgb2= Coil::where('kode_produk',$ib2)->value('keterangan');
        // $imgb3= Coil::where('kode_produk',$ib3)->value('keterangan');
        // $imgb4= Coil::where('kode_produk',$ib4)->value('keterangan');
        // $imgb5= Coil::where('kode_produk',$ib5)->value('keterangan');

        // $imgc1= Coil::where('kode_produk',$ic1)->value('keterangan');
        // $imgc2= Coil::where('kode_produk',$ic2)->value('keterangan');
        // $imgc3= Coil::where('kode_produk',$ic3)->value('keterangan');
        // $imgc4= Coil::where('kode_produk',$ic4)->value('keterangan');
        // $imgc5= Coil::where('kode_produk',$ic5)->value('keterangan');
        
        

        // return $imgb1;
        return view('content.pengecekan.print', compact('data','coil', 
        // 'imga1',
        // 'imga2',
        // 'imga3',
        // 'imga4',
        // 'imga5',

        // 'imgb1',
        // 'imgb2',
        // 'imgb3',
        // 'imgb4',
        // 'imgb5',

        // 'imgc1',
        // 'imgc2',
        // 'imgc3',
        // 'imgc4',
        // 'imgc5',
    ));
    }
}
