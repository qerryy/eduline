<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = ['hari', 'keterangan', 'mapel_id'];

    public function mapel()
    {
    	return $this->belongsToMany('App\Mapel');
    }
}