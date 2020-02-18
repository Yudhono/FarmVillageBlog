<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demo_city extends Model
{
    protected $table = 'demo_cities';

    public function state() {
      return $this->belongsTo('App\Demo_states');
    }

    public function contacts() {
      return $this->belongsTo('App\Contact');
    }
}
