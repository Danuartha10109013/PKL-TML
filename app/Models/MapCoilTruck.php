<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MapCoilTruck extends Model
{
    protected $table = 'mapcoiltruck';
    
    protected $fillable = [
        'no_gs',
        'a1', 'a2', 'a3', 'a4', 'a5', 'a6', 'a7', 'a8', 'a9', 'a10', 'a11', 'a12',
        'b1', 'b2', 'b3', 'b4', 'b5', 'b6', 'b7', 'b8', 'b9', 'b10', 'b11', 'b12',
        'a1_eye', 'a2_eye', 'a3_eye', 'a4_eye', 'a5_eye', 'a6_eye', 'a7_eye', 'a8_eye', 'a9_eye', 'a10_eye', 'a11_eye', 'a12_eye',
        'b1_eye', 'b2_eye', 'b3_eye', 'b4_eye', 'b5_eye', 'b6_eye', 'b7_eye', 'b8_eye', 'b9_eye', 'b10_eye', 'b11_eye', 'b12_eye'
    ];
}
