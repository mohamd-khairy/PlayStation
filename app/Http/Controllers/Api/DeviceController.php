<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Traits\HelperTrait;
use App\Http\Requests\DeviceRequest;
use App\Models\Device;

class DeviceController extends ApiController
{
    const MODEL = Device::class;

    use HelperTrait;

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => []]);
    }
    

    public function index()
    {
        return $this->get();
    }

    public function create()
    {
        //
    }

    public function store(DeviceRequest $request)
    {
        return $this->add($request);
        
    }

    public function show($id)
    {
        return $this->find($id);

    }

    public function edit($id)
    {
        //
    }

    public function update(DeviceRequest $request, $id)
    {
        return $this->put($request ,$id);

    }
    
    public function destroy($id)
    {
        return $this->remove($id);
    }
}
