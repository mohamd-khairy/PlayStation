<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Traits\HelperTrait;
use App\Http\Requests\DeviceTypeRequest;
use App\Models\DeviceType;

class DeviceTypeController extends ApiController
{
    const MODEL = DeviceType::class;

    use HelperTrait;

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        return $this->get();
    }

    public function create()
    {
        //
    }

    public function store(DeviceTypeRequest $request)
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

    public function update(DeviceTypeRequest $request, $id)
    {
        return $this->put($request, $id);
    }

    public function destroy($id)
    {
        return $this->remove($id);
    }
}
