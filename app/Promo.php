<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    public function Kategori(){
        return $this->belongsTo('App\Kategori');
        }
}
