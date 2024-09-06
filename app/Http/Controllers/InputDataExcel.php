<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\imports\ExcelImport;
use App\Imports\ExcelKoilImport;
use Excel;

class InputDataExcel extends Controller
{
    public function index(){
        return view('content.input-excel.index');
    }

    public function store(Request $request){
        // dd($request->all());
        Excel::import(new ExcelImport, $request->file('excel'));
        return redirect()->route('shipment')->with('success', 'Data telah berhasil ditambahkan');
    }
    
    public function storekoil(Request $request) {
        // dd($request->all());

        Excel::import(new ExcelKoilImport, $request->file('excelkoil'));

        return redirect()->route('coil')->with('success', 'Data telah berhasil ditambahkan');
    }
}
