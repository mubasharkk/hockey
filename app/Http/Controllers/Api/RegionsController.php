<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Region;

final class RegionsController extends Controller
{
    public function index()
    {
        return response()->json(
            Region::all()->map(function ($item){
                return new \App\Values\Region($item);
            })->toArray()
        );
    }

    public function leagues($regionId)
    {

    }

    public function clubs($regionId)
    {
        return response()->json(
            Region::find($regionId)->clubs->toArray()
        );
    }
}