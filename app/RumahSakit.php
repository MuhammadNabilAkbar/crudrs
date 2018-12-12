<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class RumahSakit extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'rumahsakit';
    
    protected $fillable = [
        'nama', 'akreditasi','alamat','jenis_rs','deskripsi'
    ];

}
