<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function user () {
      return $this->belongsTo('\App\User');
    }

    public function detail() {

      return $this->hasOne('App\Detail');
    }
}
