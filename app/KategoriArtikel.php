<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\KategoriArtikel;

class KategoriArtikel extends Model
{
    protected $table='kategori_Artikel';
    protected $fillable=[
        'nama', 'users_id'
    ];
    protected $casts=[ 
    ];

    
    
}
