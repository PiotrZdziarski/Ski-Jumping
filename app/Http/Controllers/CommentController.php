<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Resources\CommentsResource;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Return all comments
     * @param $news_id
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function show($news_id)
    {
        $comments = Comment::where('news_id', $news_id)->orderBy('id', 'desc')->get();

        return CommentsResource::collection($comments);
    }

    /**
     * Save comment to database
     * @param Request $request
     * @return CommentsResource
     */
    public function store(Request $request)
    {
        $description = $request->input('description');
        $news_id= $request->input('news_id');

        $comment = new Comment;
        $comment->description = $description;
        $comment->news_id = $news_id;
        $comment->date = now();

        if($comment->save()) {
            return new CommentsResource($comment);
        }
    }
}
