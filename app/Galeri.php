<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Galeri;

class Galeri extends Model
{
    protected $table='galeri';
    protected $fillable=[
        'nama', 'users_id'
    ];
    protected $casts=[ 
    ];
}
