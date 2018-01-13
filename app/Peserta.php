<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = "peserta";
    protected $primaryKey = "no_peserta";
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'no_peserta',
        'nama',
        'alamat',
        'login'
    ];
}
