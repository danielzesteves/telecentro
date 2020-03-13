<?php

namespace App\Clases;
use Illuminate\Support\Facades\Storage;
class HandlerFile 
{
    public function saveFile($file,$servidor_id)
    {
        Storage::put($servidor_id.'.'.$file->extension(), file_get_contents($file), 'public');
        return $this->getUrl($servidor_id,$file->extension());
    }
    public function getUrl($servidor_id,$ext)
    {
        return url("/").Storage::url($servidor_id.'.'.$ext);
    }
}
