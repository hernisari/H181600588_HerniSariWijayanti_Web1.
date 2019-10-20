<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Berita;

class Berita extends Model
{
    protected $table='berita';
    protected $fillable=[
        'judul','isi','users_id','kategori_berita_id'
    ];
    protected $casts=[ 
    ];
}
