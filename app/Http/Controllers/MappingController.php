<?php

namespace App\Http\Controllers;

use App\Models\Coil;
use App\Models\Pengecekan;
use App\Models\Shipment;
use Illuminate\Http\Request;

class MappingController extends Controller
{
    public function index()
    {$id=1;
        // Mengambil data Shipment berdasarkan id
        $data = Shipment::where('id',$id)->get();
        $same = Shipment::where('id',$id)->value('no_gs');
        $coil = Coil::where('no_gs', $same)->get();
        $tonase = Coil::where('no_gs', $same)->sum('berat_produk');
    
        // Mengembalikan view dengan data Shipment yang diambil
        return view('content.pengecekan.index', compact('data','coil', 'tonase'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        // Validasi input
        $validatedData = $request->validate([
            'awal_muat'          => 'required|date_format:H:i',
            'tgl_gs'          => 'required|date',
            'customer'        => 'required|string|max:255',
            'kota_negara'        => 'required|string|max:255',
            'lantai'             => 'required|string',
            'dinding'            => 'required|string',
            'pengunci_kontainer' => 'required|string',
            'sapu'               => 'required|string',
            'vacum'              => 'required|string',
            'disemprot'          => 'required|string',
            'choke'              => 'required|integer',
            'stopper'            => 'required|integer',
            'silica_gel'         => 'required|integer',
            'fumigasi'           => 'required|string',
            'selesai_muat'       => 'required|date_format:H:i',
            'no_mobil'           => 'required|string',
            'no_container'           => 'required|string',
            'tonase_tare'           => 'required',
            'cuaca'              => 'required|string',
            'kondisi_ban'        => 'required|string',
            'kondisi_lantai'     => 'required|string',
            'rantai_webbing'     => 'required|string',
            'tonase'             => 'required|string',
            'terpal'             => 'required|string',
            'stuffing'           => 'required|string', 
            'catatan'           => 'string' 
        ]);
        
        Pengecekan::create($validatedData);
        

        // Menyimpan data ke dalam tabel pengecekan
        // Pengecekan::create([
        //     'awal_muat'          => $validatedData['awal_muat'],
        //     'tgl_gs'             => $validatedData['tgl_gs'],
        //     'customer'           => $validatedData['customer'],
        //     'kota_negara'        => $validatedData['kota_negara'],
        //     'lantai'            => $validatedData['lantai'],
        //     'dinding'           => $validatedData['dinding'],
        //     'pengunci_kontainer' => $validatedData['pengunci_kontainer'],
        //     'sapu'              => $validatedData['sapu'],
        //     'vacum'             => $validatedData['vacum'],
        //     'disemprot'         => $validatedData['disemprot'],
        //     'choke'             => $validatedData['choke'],
        //     'stopper'           => $validatedData['stopper'],
        //     'silica_gel'        => $validatedData['silica_gel'],
        //     'fumigasi'          => $validatedData['fumigasi'],
        //     'selesai_muat'      => $validatedData['selesai_muat'],
        //     'no_mobil'          => $validatedData['no_mobil'],
        //     'no_container'      => $validatedData['no_container'],
        //     'tonase_tare'       => $validatedData['tonase_tare'],
        //     'cuaca'             => $validatedData['cuaca'],
        //     'kondisi_ban'       => $validatedData['kondisi_ban'],
        //     'kondisi_lantai'    => $validatedData['kondisi_lantai'],
        //     'rantai_webbing'    => $validatedData['rantai_webbing'],
        //     'tonase'            => $validatedData['tonase'],
        //     'terpal'            => $validatedData['terpal'],
        //     'stuffing'          => $validatedData['stuffing'],
        //     'catatan'          => $validatedData['catatan'],
        // ]);
        
        // Mengatur respon setelah data disimpan
        // return redirect()->route('pengecekan.index')->with('success', 'Pengecekan berhasil disimpan.');
        return "Data Berhasil disimpan";
    }

    

}
