<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengecekan extends Model
{
    use HasFactory;
    protected $table = 'pengecekan';

        protected $fillable = [
            'awal_muat',
            'awal_muat1',
            'kota_negara',
            'lantai',
            'dinding',
            'pengunci_kontainer',
            'sapu',
            'vacum',
            'disemprot',
            'choke',
            'stopper',
            'silica_gel',
            'sling',
            'fumigasi',
            'selesai_muat',
            'cuaca',
            'kondisi_ban',
            'kondisi_lantai',
            'rantai_webbing',
            'tonase',
            'terpal',
            'pegawai',
            'customer',
            'tare',
        ];
    
    
}
