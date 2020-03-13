<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servidor extends Model
{
    protected $fillable = ['ip','host',"descripcion","ext"];
    protected $table = 'servidores';
}
