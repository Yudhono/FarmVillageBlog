<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function state() {
      return $this->belongsTo('App\Demo_states');
    }

    public function city() {
      return $this->belongsTo('App\Demo_city');
    }
}
