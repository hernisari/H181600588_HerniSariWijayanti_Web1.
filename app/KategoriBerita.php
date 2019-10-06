<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\KategoriBerita;

class KategoriBerita extends Model
{
    protected $table='kategori_berita';
    protected $fillable=[
        'nama', 'users_id'
    ];
    protected $casts=[ 
    ];
}
