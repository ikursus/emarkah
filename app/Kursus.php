<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
    protected $table = 'kursus';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
     'nama',
     'status',
     'credit'
   ];

}
