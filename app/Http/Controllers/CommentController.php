<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Resources\CommentsResource;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function show($news_id)
    {
        $comments = Comment::where('news_id', $news_id)->get();

        return CommentsResource::collection($comments);
    }
}
