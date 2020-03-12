<?php

namespace App\Clases;

class Respuesta
{
    private $data;
    private $status;

    public function getData()
    {
        return $this->data;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setData($data): Respuesta
    {
        $this->data = $data;
        return $this;
    }

    public function setStatus($status): Respuesta
    {
        $this->status = $status;
        return $this;
    }
}
