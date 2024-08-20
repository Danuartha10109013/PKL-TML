<?php

namespace App\Http\Controllers;

use App\Models\Coil;
use App\Models\MapCoil;
use App\Models\Pengecekan;
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


    public function store(Request $request)
{
   
        // Validasi data input
        $validatedData = $request->validate([
            'awal_muat' => 'required|string',
            'tgl_gs' => 'required|date',
            'kota_negara' => 'required|string',
            'customer' => 'required|string',
            'lantai' => 'required|string',
            'dinding' => 'required|string',
            'pengunci_kontainer' => 'required|string',
            'sapu' => 'required|in:sudah,belum',
            'vacum' => 'required|string',
            'disemprot' => 'required|string',
            'choke' => 'required|string',
            'stopper' => 'required|string',
            'sling' => 'required|string',
            'silica_gel' => 'required|string',
            'fumigasi' => 'required|string',
            'selesai_muat' => 'required|string',
            'cuaca' => 'required|string',
            'kondisi_ban' => 'required|string',
            'kondisi_lantai' => 'required|string',
            'rantai_webbing' => 'required|string',
            'tonase' => 'required|string',
            'terpal' => 'required|string',
            'stuffing' => 'required|in:eye to sky,eye to side,eye to rear',
            'no_mobil' => 'required|string',
            'no_container' => 'required|string',
            'tonase_tare' => 'required|string',
            'catatan' => 'required|string',
            'no_gs' => 'required|string',
            //mPPING
            
            'a1' => 'nullable|string|max:255',
            'a2' => 'nullable|string|max:255',
            'a3' => 'nullable|string|max:255',
            'a4' => 'nullable|string|max:255',
            'a5' => 'nullable|string|max:255',
            'b1' => 'nullable|string|max:255',
            'b2' => 'nullable|string|max:255',
            'b3' => 'nullable|string|max:255',
            'b4' => 'nullable|string|max:255',
            'b5' => 'nullable|string|max:255',
            'c1' => 'nullable|string|max:255',
            'c2' => 'nullable|string|max:255',
            'c3' => 'nullable|string|max:255',
            'c4' => 'nullable|string|max:255',
            'c5' => 'nullable|string|max:255'
        ]);

        // Buat instance baru dari model Pengecekan
        $pengecekan = new Pengecekan();
        $pengecekan->awal_muat = $validatedData['awal_muat'];
        $pengecekan->tgl_gs = $validatedData['tgl_gs'];
        $pengecekan->kota_negara = $validatedData['kota_negara'];
        $pengecekan->customer = $validatedData['customer'];
        $pengecekan->lantai = $validatedData['lantai'];
        $pengecekan->dinding = $validatedData['dinding'];
        $pengecekan->pengunci_kontainer = $validatedData['pengunci_kontainer'];
        $pengecekan->sapu = $validatedData['sapu'];
        $pengecekan->vacum = $validatedData['vacum'];
        $pengecekan->disemprot = $validatedData['disemprot'];
        $pengecekan->choke = $validatedData['choke'];
        $pengecekan->stopper = $validatedData['stopper'];
        $pengecekan->sling = $validatedData['sling'];
        $pengecekan->silica_gel = $validatedData['silica_gel'];
        $pengecekan->fumigasi = $validatedData['fumigasi'];
        $pengecekan->selesai_muat = $validatedData['selesai_muat'];
        $pengecekan->cuaca = $validatedData['cuaca'];
        $pengecekan->kondisi_ban = $validatedData['kondisi_ban'];
        $pengecekan->kondisi_lantai = $validatedData['kondisi_lantai'];
        $pengecekan->rantai_webbing = $validatedData['rantai_webbing'];
        $pengecekan->tonase = $validatedData['tonase'];
        $pengecekan->terpal = $validatedData['terpal'];
        $pengecekan->stuffing = $validatedData['stuffing'];
        $pengecekan->no_mobil = $validatedData['no_mobil'];
        $pengecekan->no_container = $validatedData['no_container'];
        $pengecekan->tonase_tare = $validatedData['tonase_tare'];
        $pengecekan->catatan = $validatedData['catatan'];
        $pengecekan->no_gs = $validatedData['no_gs'];

        // Simpan data ke database
        $pengecekan->save();

        //mapcoil
        $mapCoil = new MapCoil();
        $mapCoil->no_gs = $validatedData['no_gs'];
        $mapCoil->a1 = $validatedData['a1'];
        $mapCoil->a2 = $validatedData['a2'];
        $mapCoil->a3 = $validatedData['a3'];
        $mapCoil->a4 = $validatedData['a4'];
        $mapCoil->a5 = $validatedData['a5'];
        $mapCoil->b1 = $validatedData['b1'];
        $mapCoil->b2 = $validatedData['b2'];
        $mapCoil->b3 = $validatedData['b3'];
        $mapCoil->b4 = $validatedData['b4'];
        $mapCoil->b5 = $validatedData['b5'];
        $mapCoil->c1 = $validatedData['c1'];
        $mapCoil->c2 = $validatedData['c2'];
        $mapCoil->c3 = $validatedData['c3'];
        $mapCoil->c4 = $validatedData['c4'];
        $mapCoil->c5 = $validatedData['c5'];

        // Simpan data ke database
        $mapCoil->save();

        // Kembalikan pesan sukses
        return redirect(url('print/' . $validatedData['no_gs']));

    }
}
