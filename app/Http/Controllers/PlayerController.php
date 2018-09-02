<?php

namespace App\Http\Controllers;

use App\Country;
use App\Http\Resources\PlayerResource;
use App\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Retrieve all players ordered by country_id or id
     * @param string $order_by
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index($order_by = 'id')
    {
        if(isset($order_by)) {
            if ($order_by == 'country_id') {
                $players = Player::orderBy('country_id')->get();
            }

            else if($order_by == 'id') {
                $players = Player::get();
            }
            else {
                $players = Player::get();
            }

        } else {
            $players = Player::get();
        }

        $countries = Country::get();

        $playersCount = count($players);
        $countriesCount = count($countries);

        for($i= 0; $i < $playersCount; $i++) {
            for($j = 0; $j < $countriesCount; $j++) {
                if($players[$i]->country_id == $countries[$j]->id) {
                    $players[$i] = collect($players[$i])->merge(['country' => $countries[$j]->country]);
                    break;
                }
            }
        }

        return PlayerResource::collection($players);
    }

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
