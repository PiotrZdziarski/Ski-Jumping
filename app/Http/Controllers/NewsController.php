<?php

namespace App\Http\Controllers;

use App\Http\Resources\NewsResource;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show($id)
    {
        $news = News::where('id', $id)->get();
        $news[0]->description = htmlentities($news[0]->description);
        $news[0]->description = html_entity_decode($news[0]->description);
        return NewsResource::collection($news);
    }

    public function show_count($count)
    {
        $news = News::take($count)->get();

        foreach ($news as $single_news) {
            $single_news->date = date('M d, Y', strtotime($single_news->date));
        }
        return NewsResource::collection($news);
    }
}
