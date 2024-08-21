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
    // dd($request->all());
   
        // Validasi data input
        $validatedData = $request->validate([
            'awal_muat' => 'required|string',
            'awal_muat1' => 'required|string',
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
            'tare' => 'required|string',
            'terpal' => 'required|string',
            'stuffing' => 'required|in:eye to sky,eye to side,eye to rear',
            'no_mobil' => 'required|string',
            'no_container' => 'required|string',
            'tonase_tare' => 'required|string',
            'catatan' => 'nullable|string',
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
            'c5' => 'nullable|string|max:255',

            'a1_eye' => 'nullable|string|max:255',
            'a2_eye' => 'nullable|string|max:255',
            'a3_eye' => 'nullable|string|max:255',
            'a4_eye' => 'nullable|string|max:255',
            'a5_eye' => 'nullable|string|max:255',
            'b1_eye' => 'nullable|string|max:255',
            'b2_eye' => 'nullable|string|max:255',
            'b3_eye' => 'nullable|string|max:255',
            'b4_eye' => 'nullable|string|max:255',
            'b5_eye' => 'nullable|string|max:255',
            'c1_eye' => 'nullable|string|max:255',
            'c2_eye' => 'nullable|string|max:255',
            'c3_eye' => 'nullable|string|max:255',
            'c4_eye' => 'nullable|string|max:255',
            'c5_eye' => 'nullable|string|max:255',
        ],[
            // Pesan kustom
            'awal_muat.required' => 'Field awal muat wajib diisi.',
            'awal_muat.string' => 'Field awal muat harus berupa teks.',
            'awal_muat1.required' => 'Field awal muat1 wajib diisi.',
            'awal_muat1.string' => 'Field awal muat1 harus berupa teks.',
            'tgl_gs.required' => 'Tanggal GS wajib diisi.',
            'tgl_gs.date' => 'Format tanggal GS tidak valid.',
            'kota_negara.required' => 'Field kota negara wajib diisi.',
            'kota_negara.string' => 'Field kota negara harus berupa teks.',
            'customer.required' => 'Field customer wajib diisi.',
            'customer.string' => 'Field customer harus berupa teks.',
            'lantai.required' => 'Field lantai wajib diisi.',
            'lantai.string' => 'Field lantai harus berupa teks.',
            'dinding.required' => 'Field dinding wajib diisi.',
            'dinding.string' => 'Field dinding harus berupa teks.',
            'pengunci_kontainer.required' => 'Field pengunci kontainer wajib diisi.',
            'pengunci_kontainer.string' => 'Field pengunci kontainer harus berupa teks.',
            'sapu.required' => 'Field sapu wajib diisi.',
            'sapu.in' => 'Nilai sapu harus "sudah" atau "belum".',
            'vacum.required' => 'Field vacum wajib diisi.',
            'vacum.string' => 'Field vacum harus berupa teks.',
            'disemprot.required' => 'Field disemprot wajib diisi.',
            'disemprot.string' => 'Field disemprot harus berupa teks.',
            'choke.required' => 'Field choke wajib diisi.',
            'choke.string' => 'Field choke harus berupa teks.',
            'stopper.required' => 'Field stopper wajib diisi.',
            'stopper.string' => 'Field stopper harus berupa teks.',
            'sling.required' => 'Field sling wajib diisi.',
            'sling.string' => 'Field sling harus berupa teks.',
            'silica_gel.required' => 'Field silica gel wajib diisi.',
            'silica_gel.string' => 'Field silica gel harus berupa teks.',
            'fumigasi.required' => 'Field fumigasi wajib diisi.',
            'fumigasi.string' => 'Field fumigasi harus berupa teks.',
            'selesai_muat.required' => 'Field selesai muat wajib diisi.',
            'selesai_muat.string' => 'Field selesai muat harus berupa teks.',
            'cuaca.required' => 'Field cuaca wajib diisi.',
            'cuaca.string' => 'Field cuaca harus berupa teks.',
            'kondisi_ban.required' => 'Field kondisi ban wajib diisi.',
            'kondisi_ban.string' => 'Field kondisi ban harus berupa teks.',
            'kondisi_lantai.required' => 'Field kondisi lantai wajib diisi.',
            'kondisi_lantai.string' => 'Field kondisi lantai harus berupa teks.',
            'rantai_webbing.required' => 'Field rantai webbing wajib diisi.',
            'rantai_webbing.string' => 'Field rantai webbing harus berupa teks.',
            'tonase.required' => 'Field tonase wajib diisi.',
            'tonase.string' => 'Field tonase harus berupa teks.',
            'tare.required' => 'Field tare wajib diisi.',
            'tare.string' => 'Field tare harus berupa teks.',
            'terpal.required' => 'Field terpal wajib diisi.',
            'terpal.string' => 'Field terpal harus berupa teks.',
            'stuffing.required' => 'Field stuffing wajib diisi.',
            'stuffing.in' => 'Nilai stuffing harus "eye to sky", "eye to side", atau "eye to rear".',
            'no_mobil.required' => 'Field nomor mobil wajib diisi.',
            'no_mobil.string' => 'Field nomor mobil harus berupa teks.',
            'no_container.required' => 'Field nomor kontainer wajib diisi.',
            'no_container.string' => 'Field nomor kontainer harus berupa teks.',
            'tonase_tare.required' => 'Field tonase tare wajib diisi.',
            'tonase_tare.string' => 'Field tonase tare harus berupa teks.',
            'catatan.string' => 'Field catatan harus berupa teks.',
            'no_gs.required' => 'Field nomor GS wajib diisi.',
            'no_gs.string' => 'Field nomor GS harus berupa teks.',
            'a1.string' => 'Field a1 harus berupa teks.',
            'a1.max' => 'Field a1 tidak boleh lebih dari 255 karakter.',
            'a2.string' => 'Field a2 harus berupa teks.',
            'a2.max' => 'Field a2 tidak boleh lebih dari 255 karakter.',
            'a3.string' => 'Field a3 harus berupa teks.',
            'a3.max' => 'Field a3 tidak boleh lebih dari 255 karakter.',
            'a4.string' => 'Field a4 harus berupa teks.',
            'a4.max' => 'Field a4 tidak boleh lebih dari 255 karakter.',
            'a5.string' => 'Field a5 harus berupa teks.',
            'a5.max' => 'Field a5 tidak boleh lebih dari 255 karakter.',
            'b1.string' => 'Field b1 harus berupa teks.',
            'b1.max' => 'Field b1 tidak boleh lebih dari 255 karakter.',
            'b2.string' => 'Field b2 harus berupa teks.',
            'b2.max' => 'Field b2 tidak boleh lebih dari 255 karakter.',
            'b3.string' => 'Field b3 harus berupa teks.',
            'b3.max' => 'Field b3 tidak boleh lebih dari 255 karakter.',
            'b4.string' => 'Field b4 harus berupa teks.',
            'b4.max' => 'Field b4 tidak boleh lebih dari 255 karakter.',
            'b5.string' => 'Field b5 harus berupa teks.',
            'b5.max' => 'Field b5 tidak boleh lebih dari 255 karakter.',
            'c1.string' => 'Field c1 harus berupa teks.',
            'c1.max' => 'Field c1 tidak boleh lebih dari 255 karakter.',
            'c2.string' => 'Field c2 harus berupa teks.',
            'c2.max' => 'Field c2 tidak boleh lebih dari 255 karakter.',
            'c3.string' => 'Field c3 harus berupa teks.',
            'c3.max' => 'Field c3 tidak boleh lebih dari 255 karakter.',
            'c4.string' => 'Field c4 harus berupa teks.',
            'c4.max' => 'Field c4 tidak boleh lebih dari 255 karakter.',
            'c5.string' => 'Field c5 harus berupa teks.',
            'c5.max' => 'Field c5 tidak boleh lebih dari 255 karakter.'
        ]);

        $fields = [
            'a1_eye', 'a2_eye', 'a3_eye', 'a4_eye', 'a5_eye',
            'b1_eye', 'b2_eye', 'b3_eye', 'b4_eye', 'b5_eye',
            'c1_eye', 'c2_eye', 'c3_eye', 'c4_eye', 'c5_eye'
        ];
    
        foreach ($fields as $field) {
            if (!array_key_exists($field, $validatedData)) {
                $validatedData[$field] = null;
            }
        }

        // Buat instance baru dari model Pengecekan
        $pengecekan = new Pengecekan();
        $pengecekan->awal_muat = $validatedData['awal_muat'];
        $pengecekan->awal_muat1 = $validatedData['awal_muat1'];
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
        $pengecekan->tare = $validatedData['tare'];
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

        $mapCoil->a1_eye = $validatedData['a1_eye'];
        $mapCoil->a2_eye = $validatedData['a2_eye'];
        $mapCoil->a3_eye = $validatedData['a3_eye'];
        $mapCoil->a4_eye = $validatedData['a4_eye'];
        $mapCoil->a5_eye = $validatedData['a5_eye'];
        $mapCoil->b1_eye = $validatedData['b1_eye'];
        $mapCoil->b2_eye = $validatedData['b2_eye'];
        $mapCoil->b3_eye = $validatedData['b3_eye'];
        $mapCoil->b4_eye = $validatedData['b4_eye'];
        $mapCoil->b5_eye = $validatedData['b5_eye'];
        $mapCoil->c1_eye = $validatedData['c1_eye'];
        $mapCoil->c2_eye = $validatedData['c2_eye'];
        $mapCoil->c3_eye = $validatedData['c3_eye'];
        $mapCoil->c4_eye = $validatedData['c4_eye'];
        $mapCoil->c5_eye = $validatedData['c5_eye'];

        // Simpan data ke database
        $mapCoil->save();

        // Kembalikan pesan sukses
        return redirect(url('print/' . $validatedData['no_gs']));

    }
}
