<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SitesController extends Controller
{
    public function index()
    {
        return view('sites.home');
    }

    public function news($id)
    {
        $title = DB::table('news')->select('title')->where('id', $id)->get();
        return view('sites.news', ['id' => $id, 'title' => $title->first()->title]);
    }

    public function player($id)
    {
        if($id > 8) {
            return redirect('404');
        }
        $player= DB::table('players')->where('id', $id)->get();
        return view('sites.player', ['id' => $id, 'player' => $player->first()]);
    }

    public function country($id)
    {
        if($id > 10) {
            return redirect('404');
        }

        $country = DB::table('countries')->where('id', $id)->get();
        return view('sites.country', ['id' => $id, 'country' => $country->first()]);
    }
}
