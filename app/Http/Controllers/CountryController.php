<?php

namespace App\Http\Controllers;

use App\Country;
use App\Http\Resources\CountryResource;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $countries = Country::all();

        return CountryResource::collection($countries);
    }


    /**
     * @param $count
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function show_count($count)
    {
        $countries = Country::orderBy('score', 'desc')->take($count)->get();

        return CountryResource::collection($countries);
    }


    /**
     * @param $id
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function show($id)
    {
       $country = Country::where('id', $id)->get();

       return CountryResource::collection($country);
    }
}
