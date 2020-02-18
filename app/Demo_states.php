<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demo_states extends Model
{
    protected $table = 'demo_state';

    public function contacts() {
      return $this->hasMany('App\Contact');
    }

    public function city() {
      return $this->belongsTo('App\Demo_city');
    }
}
