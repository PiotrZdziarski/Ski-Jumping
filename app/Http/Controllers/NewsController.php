<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Resources\NewsResource;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * return all news
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $news = News::orderBy('id', 'desc')->get();
        $comments = Comment::get();

        $news_count = count($news);
        $comments_model_count = count($comments);

        for($i = 0; $i < $news_count; $i++) {
            $comment_count = 0;
            for($j = 0; $j < $comments_model_count; $j++) {
                if($news[$i]->id == $comments[$j]->news_id) {
                    $comment_count++;
                }
            }
            $news[$i]->date = date('M d, Y', strtotime($news[$i]->date));
            $news[$i] = collect($news[$i])->merge(['comments' => $comment_count]);
        }

        return NewsResource::collection($news);
    }



     /**
     * Get single news
     * @param $id
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function show($id)
    {
        $news = News::where('id', $id)->get();
        $news[0]->description = htmlentities($news[0]->description);
        $news[0]->description = html_entity_decode($news[0]->description);
        return NewsResource::collection($news);
    }



    /**
     * show number of news
     * @param $count
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function show_count($count)
    {
        $news = News::orderBy('id','desc')->take($count)->get();
        $comments = Comment::get();

        $news_count = count($news);
        $comments_model_count = count($comments);

        for($i = 0; $i < $news_count; $i++) {
            $comment_count = 0;
            for($j = 0; $j < $comments_model_count; $j++) {
                if($news[$i]->id == $comments[$j]->news_id) {
                    $comment_count++;
                }
            }
            $news[$i]->date = date('M d, Y', strtotime($news[$i]->date));
            $news[$i] = collect($news[$i])->merge(['comments' => $comment_count]);
        }

        return NewsResource::collection($news);
    }


}
