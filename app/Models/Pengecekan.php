<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengecekan extends Model
{
    use HasFactory;

    protected $fillable = [
        'awal_muat',
        // 'tanggal', // Uncomment jika diperlukan
        // 'customer', // Uncomment jika diperlukan
        'kota_negara',
        // 'ekspedisi', // Uncomment jika diperlukan
        'lantai',
        'dinding',
        'pengunci_kontainer',
        'sapu',
        'vacum',
        'disemprot',
        'choke',
        'stopper',
        'sling',
        'silica_gel',
        'fumigasi',
        'selesai_muat',
        'cuaca',
        'kondisi_ban',
        'kondisi_lantai',
        'rantai_webbing',
        'tonase',
        'terpal',
        'stuffing',
    ];
}
