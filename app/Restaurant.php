<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
  protected $table = 'restaurants';
  //One to Many Inverse
  public function location(){
    return $this->belongsTo('App\Location');
  }
}
