<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function index()
    {
        $players = Player::paginate(8);
        return view('sites.home', ['players' => $players]);
    }
}
