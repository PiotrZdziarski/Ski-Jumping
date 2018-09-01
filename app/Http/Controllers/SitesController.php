<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SitesController extends Controller
{
    /**
     * Home Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('sites.home');
    }

    /**
     * Preview one news
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function single_news($id)
    {
        $title = DB::table('news')->select('title')->where('id', $id)->get();
        return view('sites.news', ['id' => $id, 'title' => $title->first()->title]);
    }

    /**
     * Preview all news
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function all_news()
    {;
        return view('sites.all_news');
    }


    /**
     * Preview single player
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function player($id)
    {
        if($id > 8) {
            return redirect('404');
        }
        $player= DB::table('players')->where('id', $id)->get();
        return view('sites.player', ['id' => $id, 'player' => $player->first()]);
    }


    /**
     * Preview single country
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function country($id)
    {
        if($id > 10) {
            return redirect('404');
        }

        $country = DB::table('countries')->where('id', $id)->get();
        return view('sites.country', ['id' => $id, 'country' => $country->first()]);
    }
}
