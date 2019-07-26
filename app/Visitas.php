<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitas extends Model
{
    protected $table = 'visitas';
    protected $primaryKey = 'id';
    public $fillable = [
      'nombre'
      ,'ubicacion'
      ,'nota'
      ,'foto'
      ,'state'
      ,'created_by'
      ,'updated_by'
      ,'created_at'
      ,'updated_at'
    ];
}
