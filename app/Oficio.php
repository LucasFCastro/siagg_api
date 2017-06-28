<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oficio extends Model
{
  protected $fillable = [
      'destinatario', 'assunto', 'data_envio', 'user_id'
  ];

  public function user()
  {
      return $this->belongsTo('App\User');
  }
}
