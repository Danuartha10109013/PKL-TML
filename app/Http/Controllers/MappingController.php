<?php

namespace App\Http\Controllers;

use App\Models\Coil;
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
            'lantai' => 'nullable|string',
            'dinding' => 'nullable|string',
            'pengunci_kontainer' => 'nullable|string',
            'sapu' => 'nullable|in:sudah,belum',
            'vacum' => 'nullable|string',
            'disemprot' => 'nullable|string',
            'choke' => 'nullable|string',
            'stopper' => 'nullable|string',
            'sling' => 'nullable|string',
            'silica_gel' => 'nullable|string',
            'fumigasi' => 'nullable|string',
            'selesai_muat' => 'nullable|string',
            'cuaca' => 'nullable|string',
            'kondisi_ban' => 'nullable|string',
            'kondisi_lantai' => 'nullable|string',
            'rantai_webbing' => 'nullable|string',
            'tonase' => 'nullable|string',
            'terpal' => 'nullable|string',
            'stuffing' => 'nullable|string',
            'no_mobil' => 'nullable|string',
            'no_container' => 'nullable|string',
            'tonase_tare' => 'nullable|string',
            'catatan' => 'nullable|string',
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

        // Simpan data ke database
        $pengecekan->save();

        // Kembalikan pesan sukses
        return "Data Berhasil Disimpan";
    }
}
