<?php

namespace App\Http\Controllers;

use App\Models\Coil;
use App\Models\MapCoil;
use App\Models\MapCoilTruck;
use App\Models\Pengecekan;
use App\Models\Shipment;
use Illuminate\Http\Request;

class MappingTrukController extends Controller
{
    public function index($id)
    {
        // Mengambil data Shipment berdasarkan id
        $data = Shipment::where('id',$id)->get();
        $same = Shipment::where('id',$id)->value('no_gs');
        $coil = Coil::where('no_gs', $same)->get();
        $tonase = Coil::where('no_gs', $same)->sum('berat_produk');
        $pengecekan = Pengecekan::where('no_gs', $same)->get();
        $maps = MapCoilTruck::where('no_gs', $same)->get();
    
        // Mengembalikan view dengan data Shipment yang diambil
        return view('content.pengecekan.indextruck', compact('data','coil', 'tonase','pengecekan','maps'));
    }

    public function store(Request $request, $no_gs)
{
    // Validasi data input
    // dd($request->all());
    $validatedData = $request->validate([
        'pembeda' => 'nullable|string',
        'awal_muat' => 'nullable|string',
        'awal_muat1' => 'nullable|string',
        'tgl_gs' => 'nullable|date',
        'kota_negara' => 'nullable|string',
        'customer' => 'nullable|string',
        'lantai' => 'nullable|string',
        'dinding' => 'nullable|string',
        'pengunci_kontainer' => 'nullable|string',
        'sapu' => 'nullable|in:sudah,belum',
        'vacum' => 'nullable|string',
        'disemprot' => 'nullable|string',
        'choke' => 'nullable|string',
        'stopper' => 'nullable|string',
        'sling' => 'nullable|int',
        'silica_gel' => 'nullable|string',
        'fumigasi' => 'nullable|string',
        'selesai_muat' => 'nullable|string',
        'cuaca' => 'nullable|string',
        'kondisi_ban' => 'nullable|string',
        'kondisi_lantai' => 'nullable|string',
        'rantai_webbing' => 'nullable|string',
        'tonase' => 'nullable|string',
        'tare' => 'nullable|string',
        'terpal' => 'nullable|string',
        'stuffing' => 'nullable|in:eye to sky,eye to side,eye to rear',
        'no_mobil' => 'nullable|string',
        'no_container' => 'nullable|string',
        'tonase_tare' => 'nullable|string',
        'catatan' => 'nullable|string',
        'no_gs' => 'required|string',
        'pegawai' => 'nullable|string',

        'a1' => 'nullable|string|max:255', 'a2' => 'nullable|string|max:255', 'a3' => 'nullable|string|max:255', 'a4' => 'nullable|string|max:255', 'a5' => 'nullable|string|max:255', 'a6' => 'nullable|string|max:255', 'a7' => 'nullable|string|max:255', 'a8' => 'nullable|string|max:255', 'a9' => 'nullable|string|max:255', 'a10' => 'nullable|string|max:255', 'a11' => 'nullable|string|max:255', 'a12' => 'nullable|string|max:255',
        'b1' => 'nullable|string|max:255', 'b2' => 'nullable|string|max:255', 'b3' => 'nullable|string|max:255', 'b4' => 'nullable|string|max:255', 'b5' => 'nullable|string|max:255', 'b6' => 'nullable|string|max:255', 'b7' => 'nullable|string|max:255', 'b8' => 'nullable|string|max:255', 'b9' => 'nullable|string|max:255', 'b10' => 'nullable|string|max:255', 'b11' => 'nullable|string|max:255', 'b12' => 'nullable|string|max:255',
        'a1_eye' => 'nullable|string|max:255', 'a2_eye' => 'nullable|string|max:255', 'a3_eye' => 'nullable|string|max:255', 'a4_eye' => 'nullable|string|max:255', 'a5_eye' => 'nullable|string|max:255', 'a6_eye' => 'nullable|string|max:255', 'a7_eye' => 'nullable|string|max:255', 'a8_eye' => 'nullable|string|max:255', 'a9_eye' => 'nullable|string|max:255', 'a10_eye' => 'nullable|string|max:255', 'a11_eye' => 'nullable|string|max:255', 'a12_eye' => 'nullable|string|max:255',
        'b1_eye' => 'nullable|string|max:255', 'b2_eye' => 'nullable|string|max:255', 'b3_eye' => 'nullable|string|max:255', 'b4_eye' => 'nullable|string|max:255', 'b5_eye' => 'nullable|string|max:255', 'b6_eye' => 'nullable|string|max:255', 'b7_eye' => 'nullable|string|max:255', 'b8_eye' => 'nullable|string|max:255', 'b9_eye' => 'nullable|string|max:255', 'b10_eye' => 'nullable|string|max:255', 'b11_eye' => 'nullable|string|max:255', 'b12_eye',
        
    ]);

    // Pastikan nilai `eye` yang tidak diisi menjadi null
    $fields = [
        'a1_eye', 'a2_eye', 'a3_eye', 'a4_eye', 'a5_eye', 'a6_eye', 'a7_eye', 'a8_eye', 'a9_eye', 'a10_eye', 'a11_eye', 'a12_eye',
        'b1_eye', 'b2_eye', 'b3_eye', 'b4_eye', 'b5_eye', 'b6_eye', 'b7_eye', 'b8_eye', 'b9_eye', 'b10_eye', 'b11_eye', 'b12_eye'
   
    ];

    foreach ($fields as $field) {
        if (!array_key_exists($field, $validatedData)) {
            $validatedData[$field] = null;
        }
    }

    // Update data di model Pengecekan
    $pengecekan = Pengecekan::where('no_gs', $no_gs)->firstOrFail();
    $pengecekan->update($validatedData);

    // Update data di model MapCoil
    $mapCoil = MapCoilTruck::where('no_gs', $no_gs)->firstOrFail();
    $mapCoil->update($validatedData);

    // Redirect ke halaman sukses
    return redirect()->back();
    // return redirect(url('prints/' . $validatedData['no_gs']));
}
}
