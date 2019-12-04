<?php

namespace App\Http\Services;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceService 
{

    private $model;

    public function __construct(Device $model)
    {
        $this->model = $model;        
    }

    public function insert($data)
    {
        return $this->model->create($data);

    }
 
}