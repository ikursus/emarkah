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

    # Relationship di antara table user_markahs dan table user
    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function kursus()
    {
      return $this->belongsTo(Kursus::class);
    }
}
