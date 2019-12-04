<?php

namespace App\Http\Services;

use App\Models\User;
use Illuminate\Http\Request;

class UserService 
{

    private $model;

    public function __construct(User $model)
    {
        $this->model = $model;        
    }

    public function insert($data)
    {
        return $this->model->create($data);

    }
 
}