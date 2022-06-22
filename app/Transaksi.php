<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['invoice_number', 'user_id', 'status'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function mapel()
    {
    	return $this->belongsTo('App\Mapel');
    }
}
