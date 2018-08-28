<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function index()
    {
        return view('sites.home');
    }

    public function news($id)
    {
        return view('sites.news', ['id' => $id]);
    }
}
