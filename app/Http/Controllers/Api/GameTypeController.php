<?php

namespace App\Http\Controllers\Api;

use App\Models\GameType;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Traits\HelperTrait;
use App\Http\Requests\GameTypeRequest;

class GameTypeController extends ApiController
{
    const MODEL = GameType::class;

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

    public function store(GameTypeRequest $request)
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

    public function update(GameTypeRequest $request, $id)
    {
        return $this->put($request ,$id);

    }
    
    public function destroy($id)
    {
        return $this->remove($id);
    }
}
