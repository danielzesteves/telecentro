<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class Servidor extends Model
{
    protected $fillable = ['ip','host',"descripcion","ext"];
    protected $table = 'servidores';
    protected $appends = ['img'];

    public function getImgAttribute()
    {
        $fileName = $this->id.'.'.$this->ext;
        if (Storage::disk('local')->exists($fileName)) {
            return asset(Storage::url($fileName));
        }
        return asset("storage/notfound.gif");
    }    
}
