<?php

namespace App\Http\Controllers;

use App\Country;
use App\Http\Resources\PlayerResource;
use App\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{


    /**
    * Show number of results
    */
    public function show_count($count)
    {
        $players = Player::orderBy('score', 'desc')->take($count)->get();

        return PlayerResource::collection($players);
    }


    /**
     * @param $id
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function show($id)
    {
        $player = Player::where('id', $id)->get();

        $player_country_id = $player[0]->country_id;
        $country = Country::where('id', $player_country_id)->get();
        $country_name = $country[0]->country;
        $player[0] = collect($player[0])->merge(['country' => $country_name]);

        return PlayerResource::collection($player);
    }


    public function show_by_country($country_id)
    {
        $player = Player::where('country_id', $country_id)->get();

        return PlayerResource::collection($player);
    }
}
