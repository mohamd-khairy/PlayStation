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

        // $authorize = $request->header('Authorization');

        // $client = new \GuzzleHttp\Client();
        // $response = $client->post("http://localhost:8000/api/auth/me", [
        //     'headers' => [
        //         'Authorization' => $authorize
        //     ],
        //     'form_params' => ['body' =>  '']
        // ]);
        // // $response = $client->get("http://apps.orchtech.com:81/law5/api/section");

        // return  $response->getBody();
        // return responseSuccess($response);

        $request = $request->all();
        $request['user_id'] = auth('api')->user()->id;
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
