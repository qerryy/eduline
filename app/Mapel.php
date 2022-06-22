<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $fillable = ['mapel_name', 'total_price'];

    public function jadwal()
    {
    	return $this->belongsToMany('App\Jadwal');
    }

    public function transaksi()
    {
    	return $this->hasOne('App\Transaksi');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
