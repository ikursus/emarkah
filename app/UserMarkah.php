<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMarkah extends Model
{
    protected $fillable = [
      'user_id',
      'kursus_id',
      'markah',
      'gred',
      'mata_nilai'
    ];
}
