<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    public function task() {
      return $this->belongsTo('\App\Detail');
    }
}
