<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trolly extends Model
{
    protected $table = 'trolly';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_barang','jumlah_barang'
       ,'tipe_bahan'
       ,'desain' 
       ,'fname'
       ,'lname'
       ,'phone'
       ,'address'
       ,'bank'
       ,'no_rekening'
       ,'nama'
       ,'total'  
    ];
    public $timestamps = false;
}
