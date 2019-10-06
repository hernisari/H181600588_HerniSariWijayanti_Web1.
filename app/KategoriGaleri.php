<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\KategoriGaleri;

class KategoriGaleri extends Model
{
    protected $table='kategori_galeri';
    protected $fillable=[
        'nama', 'users_id'
    ];
    protected $casts=[ 
    ];
}
